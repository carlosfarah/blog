<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $tituloBlog = 'Carlos Farah';

        $topMenu = [
            0 => 'Home',
            1 => 'Contato',
            2 => 'Sobre nós',
            3 => 'Serviços',
        ];

        $posts = [
                0 => [
                    'titulo'    => 'Título do post 0',
                    'autor'     => 'Carlos Farah 0',
                    'criado'    => '24 de agosto 2016 0',
                    'banner'    => NULL,
                    'conteudo'  => 'conteúdo do post 0',
                    'categoria' => 0,
                ],
                1 => [
                    'titulo'    => 'Título do post 1',
                    'autor'     => 'Carlos Farah 1',
                    'criado'    => '24 de agosto 2016 1',
                    'banner'    => NULL,
                    'conteudo'  => 'conteúdo do post 1',
                    'categoria' => 1,
                ],
                2 => [
                    'titulo'    => 'Título do post 2',
                    'autor'     => 'Carlos Farah 2',
                    'criado'    => '24 de agosto 2016 2',
                    'banner'    => NULL,
                    'conteudo'  => 'conteúdo do post 2',
                    'categoria' => 2,
                ],
        ];

        $categorias = [
                0 => [
                    'id'     => 0,
                    'titulo' => 'Desenvolvimento',
                ],
                1 => [
                    'id'     => 1,
                    'titulo' => 'Devops',
                ],
                2 => [
                    'id'     => 2,
                    'titulo' => 'Scrum',
                ],
        ];

        $widget = [
                0 => [
                    'id'       => 0,
                    'titulo'   => 'Destaque do mês',
                    'conteudo' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.',
                ],
        ];

        return view('blog.blog', [
            'tituloBlog' => $tituloBlog,
            'topMenu'    => $topMenu,
            'posts'      => $posts,
            'categorias' => $categorias,
            'widget'     => $widget,
        ]);
    }
}
