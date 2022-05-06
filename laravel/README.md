# real estate website
1. **DB**
    - train
        id | bigint
        crated_at | data
        updated_at | data
        azienda | string (100)
        stazione_di_partenza | string(100)
        stazone_di_arrivo | string(100)
        orario_di_arrivo | time
        orario_di_partenza | time
        codice_treno | string(50)
        numero_corozze | smallint
        in_orario | boolean
        cancellato | boolean
        scopo | string(20)
        data_viagio | date
1. **create DB**
1. **update of .env file**

1. **model**
    - train
1. **controller**
    - trainController
1. **migration**
    - create_train_table
1. **seeder**
    - trainSeeder.php
