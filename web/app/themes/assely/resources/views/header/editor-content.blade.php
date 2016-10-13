use Assely\Taxonomy\Taxonomy;

class Grenes extends Taxonomy
{
    public $slug = 'grenes';

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
