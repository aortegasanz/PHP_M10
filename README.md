# PHP_M10 - Práctica 
PHP_10

https://github.com/aortegasanz/PHP_M10

# Descripció

    Crear una aplicació, per a gestionar el fons de una llibreria técnica, aplicant el patró de disseny de software MVC(Model-Vista-Controlador). 

- Nivell 1
    - Exercici 1
        Definir les rutes principals que tindrà el nostre lloc web. Per a començar simplement indicarem que les rutes retornen una cadena (així podrem comprovar que s'han creat correctament). A continuació s'inclou una taula amb les rutes a definir (Configura els mètodes GET, POST, UPDATE o DELETE d'acord a el tipus de ruta).

        Ruta                Text a mostrar
        -----------------   ------------------------
        /                   Pantalla principal
        login               Login usuari
        logout              Logout usuari
        catalog             Llista llibres
        catalog/show/{id}   Vista detall libre {id}
        catalog/create      Afegir llibre
        catalog/edit/{id}   Modificar llibre {id}

    - Exercici 2
        Crea les vistes php i associa-la a cadascuna de las rutes següents seguint la següent estructura:


        Crea una col·lecció a Postman i guarda la petició del punt anterior en ella. Exporta la col·lecció i guarda-la en un directori nou del projecte.

    - Exercici 3
        Defineix un middleware i registreu-lo globalment a nivell de projecte. Aquest midlware serà l'encarregat d'imprimir la data actual a la pantalla.

        Crear els formularis necessaris per a poder realitzar un CRUD sobre el sistema de gestió de la biblioteca tècnica. Heu de validar que la informació introduïda a l'usuari sigui correcta.

        Nota: No cal crear la lògica per treballar amb la BD.

- Nivell 2

    - Exercici 4
        Creeu un middleeare a nivell de controlador. Aquest midlware serà l'encarregat d'imprimir la data actual a la pantalla abans de carregar la informació.

    - Exercici 5
        Crea un sistema que gestiona l'error 404 a nivell de projecte. Podeu utilitzar la funció Resposta i la redirecció de Laravel.

- Nivell 3
    - Exercici 6
        Afegeix la vista d'inici de sessió, registre i recuperació de contrasenya que l'usuari necessita per accedir a l'aplicació.

        Nota: No cal crear la lògica per treballar amb la BD.

    - Exercici 7
        Agafeu les dades d'inici de sessió al sistema de galetes de Laravel. En cadascuna de les vistes has d'incrustar un navbar en el qual apareix el nom d'usuari registrat.

# Recursos
Revisa la informació i els continguts que trobaràs dins del mòdul.