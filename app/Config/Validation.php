<?php namespace Config;

class Validation
{
	//--------------------------------------------------------------------
	// Setup
	//--------------------------------------------------------------------

	/**
	 * Stores the classes that contain the
	 * rules that are available.
	 *
	 * @var array
	 */
	public $ruleSets = [
		\CodeIgniter\Validation\Rules::class,
		\CodeIgniter\Validation\FormatRules::class,
		\CodeIgniter\Validation\FileRules::class,
		\CodeIgniter\Validation\CreditCardRules::class,
	];

	/**
	 * Specifies the views that are used to display the
	 * errors.
	 *
	 * @var array
	 */
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single',
	];

	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------

	public $signin = [
        'email'        => 'required|valid_email',
        'password'     => 'required',
	];
	public $signin_errors = [
        'password' => [
            'required'    => 'EL {field} es requerido.',
		],
        'email'    => [
			'required'		=> 'El {field} es requerido.',
            'valid_email' => 'Por favor ingrese un correo valido.'
        ]
	];
	
	public $signup = [
        'email'        => 'required|valid_email|is_unique[users.email]',
        'password'     => 'required',
        'pass_confirm' => 'required|matches[password]'
    ];

    public $signup_errors = [
        'password' => [
            'required'    => 'EL {field} es requerido.',
		],
		'pass_confirm' => [
            'required'    => 'El {field} es requerido.',
        ],
        'email'    => [
			'required'		=> 'El {field} es requerido.',
            'valid_email' => 'Por favor ingrese un correo valido.'
        ]
    ];
}
