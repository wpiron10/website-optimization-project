<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ProductRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Illuminate\Support\Facades\Storage;
use App\Models\Tag;

/**
 * Class ProductCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ProductCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation {
        destroy as traitDestroy;
    }
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Product::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/product');
        CRUD::setEntityNameStrings('product', 'products');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        // CRUD::setFromDb(); // set columns from db columns.

        /**
         * Columns can be defined using the fluent syntax:
         * - CRUD::column('price')->type('number');
         */

        CRUD::column('image')->wrapper([
            'element' => 'img',
            'src' => function ($crud, $column, $entry) {
                $imageName = $entry->image;
                $imageUrl = asset('storage/' . $imageName);
                return $imageUrl;
            },
            'width' => '60px',
            'height' => '60px',
            'alt' => function ($crud, $column, $entry) {
                return $entry->name;
            },
        ]);
        CRUD::column('name');
        CRUD::column('price')->type('decimal')->prefix('$');
        CRUD::column('promo')->type('decimal')->prefix('$');
        CRUD::column('tags');

        CRUD::column('status')->wrapper([
            'class' => function ($crud, $column, $entry) {
                return match ($entry->status) {
                    'draft' => 'badge bg-warning',
                    'active' => 'badge bg-success',
                    'inactive' => 'badge bg-danger',
                };
            },
        ]);
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(ProductRequest::class);
        CRUD::setFromDb(); // set fields from db columns.

        /**
         * Fields can be defined using the fluent syntax:
         * - CRUD::field('price')->type('number');
         */
        CRUD::field('image')->type('upload')->label('Image')->prefix('products/')->storePrefix('products')->withFiles([
            'disk' => 'public',
        ]);

        CRUD::field('status')
            ->type('select_from_array')
            ->label('Status')
            ->options(['draft' => 'Draft', 'active' => 'Active', 'inactive' => 'Inactive'])
            ->allowsMultiple(false)
            ->default('draft');

        CRUD::field('tags')
            ->type('select_from_array')
            ->label('Tags')
            ->options(Tag::pluck('name', 'name')->toArray())
            ->allowsMultiple(false);
    }

    /**
     * Define what happens when the Update operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->crud->setOperationSetting('showDeleteButton', true);
        CRUD::setValidation(ProductRequest::class);
        CRUD::setFromDb();

        $this->setupCreateOperation();
    }


    public function destroy($id)
    {
        // CRUD::hasAccessOrFail('delete');

        // return CRUD::delete($id);
        $product = $this->crud->getModel()->findOrFail($id);

        // Supprimer l'image du stockage si elle existe
        if ($product->image) {
            Storage::disk('public')->delete($product->image);
        }

        // Appeler la méthode destroy du trait DeleteOperation
        return $this->traitDestroy($id);
    }
}
