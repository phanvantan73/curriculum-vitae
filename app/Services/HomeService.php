<?php

namespace App\Services;

class HomeService
{
	public function getInfo()
    {
    	return [
    		'surname' => 'Phan Van',
        	'lastname' => 'Tan',
        	'avatar' => 'https://fuss10.elemecdn.com/3/28/bbf893f792f03a54408b3b7a7ebf0jpeg.jpeg',
        	'age' => 24,
        	'email' => 'phan.van.tan@gmail.com',
        	'fit' => 'fill',
    	];
    }

    public function getCareer()
    {
    	$careers = [
			'Desiring to become a Web developer of the company to improve the experience of ' .
				'building website of Mobile App applications to satisfy interface programming enthusiasts.',
			'Learn to gain experience in programming new languages, ' .
				'especially the Fond end array (HTML, CSS, JavaScript, Js ...) from A / S in the company.',
			'Expect a full-time public employee in the shortest probationary period',
			'Become good engineers involved in software development projects with leading customers in Japan',
			'Desire to immerse yourself in the joyful, youthful but equally professional atmosphere of the ' .
				'training room before officially embarking on challenging and challenging projects.',
		];
    	$urls = [
    		'https://fuss10.elemecdn.com/a/3f/3302e58f9a181d2509f3dc0fa68b0jpeg.jpeg',
			'https://fuss10.elemecdn.com/1/34/19aa98b1fcb2781c4fba33d850549jpeg.jpeg',
			'https://fuss10.elemecdn.com/0/6f/e35ff375812e6b0020b6b4e8f9583jpeg.jpeg',
			'https://fuss10.elemecdn.com/9/bb/e27858e973f5d7d3904835f46abbdjpeg.jpeg',
			'https://fuss10.elemecdn.com/d/e6/c4d93a3805b3ce3f323f7974e6f78jpeg.jpeg',
    	];
    	$data = [];
    	array_map(function ($career, $url) use (&$data) {
    		array_push($data, [
    			'career' => $career,
    			'url' => $url,
    		]);
    	}, $careers, $urls);

    	return $data;
    }

    public function getExperience()
    {
    	$data = [
    		[
    			'work' => 'Website development staff',
				'start_time' => '07/2018',
				'end_time' => '12/2018',
				'image' => 'assets/php.jpg',
				'experience' => [
					'Support project web design for companies using PHP language',
					'Interface design using HTML5 CSS3 language',
					'Prepare daily work report'
				],
    		],
    		[
    			'work' => 'Web Designer staff',
				'start_time' => '01/2019',
				'end_time' => 'now',
				'image' => 'assets/html.png',
				'experience' => [
					'Design web interface, cut psd according to usage template (HTML5, Css3, Javascript)',
					'Designer logo, web icon'
				],
    		],
    	];

    	return $data;
    }
}