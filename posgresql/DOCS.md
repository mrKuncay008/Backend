# PosgreSql 

## [linux]
sudo su postgres: Untuk ubah root ke posgre
psql : untuk masuk ke sql dengan user default

SQL sintax
- \l : show all database
- \du : show user 
- change password
```sql
ALTER USER postgres WITH PASSWORD 'admin123!@';
```
- \c testdb; connect DB / use db
- \dt : show tables

- Contoh Select (Di utamakan menggunakan query Optimaze)
```sql
SELECT nama, umur FROM test;
```

link: https://neon.tech/postgresql/postgresql-tutorial/postgresql-select