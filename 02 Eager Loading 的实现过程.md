#Eager Loading 的实现过程

User.php
```
/**
 * @return \Illuminate\Database\Eloquent\Relations\HasMany
 */
public function posts(){
    return $this->hasMany(Post::class);
}
```

web.php
```
Route::get('/', function () {
    // 获取id大于10的用户并将用户所发的帖子查询出来
    $data = \App\User::with('posts')->where('id', '>', 10)->get();
    dd($data);

    return view('welcome');
});

```

