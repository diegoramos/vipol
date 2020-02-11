<?php 
namespace App\Models;
use CodeIgniter\Model;

class NewsModel extends Model
{
    protected $table = 'blog';
    protected $primaryKey = 'blog_id';
    protected $returnType = 'array';
    protected $useSoftDeletes = true;
    protected $allowedFields = ['blog_title', 'blog_description'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

/*    public function getNews($blog_id = false)
	{
        if ($blog_id === false)
        {
               return $this->findAll();
        }

        return $this->asArray()
                     ->where(['blog_id' => $blog_id])
                     ->first();
	}*/
}