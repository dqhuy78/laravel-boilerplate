## How to use
- Type the following command to generate a full entity with repository implement
```
$ php artisan repository:generate ${ModelName}
```
- The above command will generate:
```
App/Entities/Eloquents/Mutators/${ModelName}.php: Contain your entity code
App/Entities/Eloquents/Mutators/${ModelName}Mutator.php: Contain your entity mutator code
App/Entities/Eloquents/Relation/${ModelName}Relation.php: Contain your entity relation code
App/Repositories/Contracts/${ModelName}RepositoryInterface.php: Contain your entity repository interfce code
App/Repositories/Eloquents/${ModelName}Repository.php: Contain your entity repository implement code

```
- For other command:
```
$ php artisan // Check for the [repository:]
```
