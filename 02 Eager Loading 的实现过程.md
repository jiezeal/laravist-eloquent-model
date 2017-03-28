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
    $data = \App\User::with('posts')->where('id', '>', 10)->get();
    dd($data);
    
    return view('welcome');
});
```

