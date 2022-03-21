use Illuminate\Database\Eloquent\Model;

class Inmueble extends Model
{
  protected $fillable = [
  'departamento', 'minicipio', 'barrio', 'zona', 'tipoinmueble', 'gestion','alcobas','baños','valor','folder'
  ];
}