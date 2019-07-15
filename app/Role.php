<?php

namespace App;
use Config;
use Illuminate\Database\Eloquent\Model;
use App\Support\Authorization\AuthorizationRoleTrait;

class Role extends Model
{
	 use AuthorizationRoleTrait;
	 
	  protected $table;

    protected $casts = [
        'removable' => 'boolean'
    ];

    /**
     * Creates a new instance of the model.
     *
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->table = Config::get('entrust.roles_table');
    }


    protected $fillable = ['name', 'display_name', 'description'];
	
	/*
	protected $table = 'roles';
	protected $fillable =  ['name', 'display_name', 'description'];
	
    public function permissions(){
		return 	$this->belongsToMany(Permission::class);
	}
	
	public function assign(Permission $permission){
		return $this->permissions()->save($permission);
	}
	*/
}
