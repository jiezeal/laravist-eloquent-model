php artisan make:model Post -m

2017_03_28_022637_create_posts_table.php
```
public function up()
{
    Schema::create('posts', function (Blueprint $table) {
        $table->increments('id');
        $table->string('title');
        $table->text('body');
        $table->integer('user_id');
        $table->timestamps();
    });
}
```

