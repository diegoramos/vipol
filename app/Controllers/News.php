<?php namespace App\Controllers;
use App\Models\NewsModel;
use CodeIgniter\Controller;

class News extends Controller
{
        public function index()
        {
                $model = new NewsModel();

                $data = [
                        'news'  => $model->findAll(),
                        'title' => 'News archive',
                ];

                //echo view('templates/header', $data);
                echo view('news/overview', $data);
                //echo view('templates/footer');
        }

        public function view($blog_id = null)
        {
                $model = new NewsModel();

                $data['news'] = $model->find($blog_id);

                if (empty($data['news']))
                {
                        throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the news item: '. $blog_id);
                }

                $data['title'] = $data['news']['blog_title'];

                //echo view('templates/header', $data);
                echo view('news/view', $data);
                //echo view('templates/footer');
        }

        public function create()
        {
            helper('form');
            $model = new NewsModel();

            if (! $this->validate([
                'title' => 'required|min_length[3]|max_length[255]',
                'body'  => 'required'
            ]))
            {
                //echo view('templates/header', ['title' => 'Create a news item']);
                echo view('news/create', ['title' => 'Create a news item']);
                //echo view('templates/footer');

            }
            else
            {
                $model->save([
                    'blog_title' => $this->request->getVar('title'),
                    'blog_description'  => $this->request->getVar('body'),
                ]);
                echo view('news/success');
            }
        }

}