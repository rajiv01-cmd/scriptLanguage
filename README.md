# scriptLanguage


1. DDL (Data Definition Language):
 create, drop, alter, rename

2. DML (Data Manipulation Language):
  Select --> Retrieve
  Insert --> Create
  Update --> Update
  Delete
  Merge

3. TCL (Transaction Control Language):
  commit
  rollback
  set transaction

4. DCL (Data Control Language):
  read access, R/W access, access
  grant, revoke

// Insert Query

insert into blog (title, details ) VALUES ( 'Dr. Yubaraja Khatiwoda to be the Embasssador for USA', 'Government of Nepal is about to appoint Dr. Yubaraja Khatiwoda as Embasssador for USA for Nepal');

// select query // * -> all 

SELECT * FROM `blog` WHERE id ='1';
SELECT * FROM `blog` WHERE id ='2' or title = 'KP oli';
SELECT * FROM `blog` WHERE id ='2' and title = 'KP oli';

// update query

update blog set title = 'Dr. Govinda K.C', content = 'He is a great social activity. ' where id = '2';

// delete query

delete from where title = 'Dr. Govinda K.C';