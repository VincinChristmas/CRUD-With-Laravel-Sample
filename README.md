# CRUD-With-Laravel-Sample

<h1>Laravel Blog Project Documentation</h1>

<h2>Project Overview</h2>

<p>This is a simple blog application built with Laravel that demonstrates CRUD (Create, Read, Update, Delete) operations with relationships between posts and categories.</p>

<h2>Project Structure</h2>
<h3>Models</h3>

<h4>1. Post Model (app/Models/Post.php)</h4>

class Post extends Model
{
    protected $fillable = ['title', 'content', 'category_id'];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}