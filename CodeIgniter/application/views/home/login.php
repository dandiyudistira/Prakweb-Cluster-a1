<?php echo doctype('html5'); ?>

<html>
  <head>
    <meta charset="utf-8">
    <title>Login Data</title>
  </head>
  <a href=" <?php echo base_url('index.php/home/register'); ?> ">Register</a>
  <style>
    body {
      background-image: url(https://img.rawpixel.com/s3fs-private/rawpixel_images/website_content/rm27-tong-62-nature.jpg?w=800&dpr=1&fit=default&crop=default&q=65&vib=3&con=3&usm=15&bg=F4F4F3&ixlib=js-2.2.1&s=383d958674f3ba66d32edbcc2565215a);
      
        background-size: cover; 
        
    }
    </style>
  <body>


    <?php

        validation_errors();

        $username = array(
            'name'            => 'username',
            'type'            => 'text',
            'value'           => "",
            'placeholder'     => 'Username',
        );

        $password = array(
            'name'            => 'password',
            'type'            => 'password',
            'placeholder'     => 'Password',
            'value'           => "",
        );

        $submit = array(
            'name'            => 'insertusers',
            'type'            => 'submit',
            'value'           => 'Login',
            'placeholder'     => '',
        );

        echo  form_open_multipart('home/loginAction');

          echo form_label('Username');
            echo br(1);
          echo form_input($username);
          echo  form_error('username');
            echo  br(2);


          echo form_label('Password');
            echo br(1);
          echo form_input($password);
          echo  form_error('password');
            echo  br(2);

          echo  form_submit($submit);
            echo br(2);

        echo form_close();

        if ($this->session->flashdata('sukses_insert_users') <> '') {
          echo $this->session->flashdata('sukses_insert_users');
        }

     ?>

  </body>
</html>
