# php_for_laravel_developers
Repositori php M9

**Creat per Cinta Zaragoza** 


# Tags
V0.1: Exemple Hello World de PHP i HTML sense separar concerns 

V0.2: Seguim amb el video i creem la base de dades

V0.3: Codi final després de acabar el video 101

V0.4: Separar la configuració (config.php) del codi -> implementat la 0 de SOLID -> Open To Extension closed to modification

V0.5: Refactorització feta per a POO i afegit composer.json per funcionar amb autoloads i no necessitar requires i com funcionen els namespaces

V0.6: Container -> Implementar D de SOLID Dependency Inversion Principle -> Inverter -> Inversor Container -> APP  



#Production
*Notes procés de penjar a producció:*
production ->  git checkout production
                git merge main
                git push origin production

Recordar afegir les taules de la  bases de dades al laravel forge:
"PHP message: PHP Fatal error:  Uncaught PDOException: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'phplaraveldevs.tasks' doesn't exist in /home/forge/phpforlaraveldevelopers.czaragoza.systems/Framework/Database/Database.php:22
Stack trace:

16/01 -> creem la part dels users 