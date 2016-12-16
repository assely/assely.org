use Assely\Taxonomy\Taxonomy;

class Genres extends Taxonomy
{
    public $slug = 'genres';

    /**
     * Describe taxonomy relationships.
     */
    public function relation()
    {
        return $this->belongsTo(['App\Posttypes\Movies']);
    }

    /**
     * Register taxonomy custom fields.
     */
    public function fields()
    {
        return [
            Field::toggle('featured')
        ];
    }
}
