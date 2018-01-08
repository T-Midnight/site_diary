<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\View;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
	
	public function load()
    {
		
	}
	
	public function send()
    {

        $fp = fopen("work.txt", "w"); // 
		fputs($fp, $_POST['name']);
		fputs($fp, "\r\n");
		fputs($fp, $_POST['text']);
		if (filesize("work.txt")!= 0) {
			echo 'Домашнее задание отправлено на проверку';
		}
		fclose($fp); //Закрытие файл
    }
}
