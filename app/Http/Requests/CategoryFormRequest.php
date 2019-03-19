<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // an extra layer of security,
        //  you can check for user role and permission to check if 
        //      user can do this particular task here,
        //  you can also skip it by return true;
        if(auth()->check())
        {
           // I'm using Entrust for user role management
           $user = auth()->user();
           switch($this->getMethod)
           {
               case 'post':
               case 'POST':
                  return $user->hasPermission('create-category');
               case 'put':
               case 'PUT':
                  return $user->hasPermission('update-category');
               case 'DELETE':
               case 'delete':
                  return $user->hasPermission('delete-category');
           }
        }
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        switch ($this->getMethod())
        {
            // handle creates
            case 'post':
            case 'POST':
                return [
                    'name' => 'required|unique:categories,name',
                ];

            // Handle updates
            case 'put':
            case 'PUT':
                return [
                    'category_id' => 'required|exists:categories,id',
                    'name'        => [
                        'required',
                        Rule::unique('categories')->ignore(request('category_id))
                ];

            // handle deletions
            case 'delete':
            case 'DELETE':
               return [
                   'category_id' => 'required|exists:categories,id'
               ];
          }
          // return empty array for other requests
          return [
             //
          ];
      }
}