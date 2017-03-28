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