No diretÃ³rio documents irÃ£o ser guardados todos os artefatos refrentes a anÃ¡lise,
comentÃ¡rios, ideias e demais que acreditem ser necessÃ¡rios.


(USUARIOS)
Cliente -> Usuario Externo
Usuario -> Usuario Local
Admin -> Administrador Local



(BASE)
La base de datos fue creada con los nombres de columnas todas en minÃºsclas

(CONEXION A LA BASE)
executeCommand -> Comando de inserciÃ³n de datos a la base
executeQuery -> Comando de consulta de datos en la base
$sqlCommand -> Comando de consulta o alteraciÃ³n en la base de datos

(CONTROLLER)
$objUsuario -> Objeto Usuario
$objCliente -> Objeto Cliente


(ALERTAS)
$msj -> mensajes

(CLASES)
*Nombrar en UpperCamelCase
*La llave "{" estarÃ¡ en la linea del nombre de la clase y la 
 "}" irÃ¡ abajo.
*Todo codigo dentro de la clase tendrÃ¡ una sangrÃ­a. (TAB)
*PodrÃ¡ haber solamente una clase por archivo

ejemplo:

class ClienteModel{
    contenido
}

(VARIABLES DE CLASES)
*Nombrar en lowerCamelCase
*Siempre declarar su visibilidad: private, protected o public

 ejemplo:
class ClienteModel {
    
    private $id;
    private $nome;
       
    public function setId($id) {
        $this->id = $id;
    }
    
    public function setNome($nome) {
        $this->nome = $nome;
        return $this;
    }
       
    public function setTipoUsuario($tipoUsuario) {
        $this->tipoUsuario = $tipoUsuario;
        return $this;
    }
    public function getId() {
        return $this->id;
    }
    
    public function getNome() {
        return $this->nome;
    }
    
    public function getTipoUsuario() {
        return $this->tipoUsuario;
    }
    
}

(FUNCIONES O MÃ‰TODOS)
*Nombrar de forma lowerCamelCase
*La llave "{" estarÃ¡ en la linea del nombre de la funciÃ³n o mÃ©todo y la 
 "}" irÃ¡ abajo.
*Todo codigo dentro de la clase tendrÃ¡ una sangrÃ­a. (TAB)
*Siempre declarar su visibilidad: private, protected o public

 public function insertarCliente() {  
        
    $parameters = array();
    $parameters [':nome'] = $this->getNome();
    $parameters [':username'] = $this->getUsername();
    $parameters [':email'] = $this->getEmail();
    $parameters [':senha'] = $this->getSenha();
    $parameters [':tipo_usuario'] = $this->getTipoUsuario();
        
    $objClienteDao = new ClienteDao();
        
    return $objClienteDao->insertCliente($parameters);
    }

(ESTRUCTURAS DE CONTROL)
if / else / elseif
*La llave "{" estarÃ¡ en la linea del nombre de la funciÃ³n o mÃ©todo y la 
 "}" irÃ¡ abajo.
*Todo codigo dentro de las llaves tendrÃ¡ una sangrÃ­a. (TAB)
*Siemore utilizar llaves {} mismo que la condiciÃ³n tenga solamente una lÃ­nea.
*else O elsif deberÃ¡n estar despuÃ©s de la llave que cierra.

*Estas condiciones tambiÃ©n se aplican a while/for/foreach

if(isset($_GET['id'])){
            
            $objUsuarioModel = new UsuarioModel();
            
            $objUsuarioModel->setId($_GET['id']);
            
            if ($objUsuarioModel->eliminarUsuario()){
                echo "ok";
            }  else {
                echo "problem";
            }
        }

(VARIABLES)
*SerÃ¡n definidas en lowerCamelCase
*Su nombre harÃ¡ referencia al tipo y a su contenido

aNombre -- Array
oNombre -- Objeto
sNombre -- String
iNombre -- Int
fNombre -- Float

Ejemplo:

aPedidos
sEmail
iCantidad