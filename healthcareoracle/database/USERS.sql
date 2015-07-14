--------------------------------------------------------
--  File created - Friday-July-03-2015   
--------------------------------------------------------
--------------------------------------------------------
--  DDL for Table USERS
--------------------------------------------------------
---------------------------------------------------------------------------------------------------------------------------
  CREATE TABLE "DRDOHCROOT"."USERS" 
   (	"ID" NUMBER(10,0), 
	"UNAME" VARCHAR2(50 CHAR), 
	"PASS" VARCHAR2(50 CHAR), 
	"NAME" VARCHAR2(100 CHAR), 
	"PHONE" VARCHAR2(12 CHAR), 
	"PRIVILEGE" NUMBER(10,0)
   ) SEGMENT CREATION IMMEDIATE 
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS" ;
---------------------------------------------------------------------------------------------------------------------------
Insert into DRDOHCROOT.USERS (ID,UNAME,PASS,NAME,PHONE,PRIVILEGE) values (1,'admin','7110eda4d09e062aa5e4a390b0a572ac0d2c0220','Ashutosh Dwivedi','9439967338',1);
---------------------------------------------------------------------------------------------------------------------------
Insert into DRDOHCROOT.USERS (ID,UNAME,PASS,NAME,PHONE,PRIVILEGE) values (3,'pharma','7110eda4d09e062aa5e4a390b0a572ac0d2c0220','Ashutosh Dwivedi','9439967338',3);
---------------------------------------------------------------------------------------------------------------------------
Insert into DRDOHCROOT.USERS (ID,UNAME,PASS,NAME,PHONE,PRIVILEGE) values (5,'vik','8cb2237d0679ca88db6464eac60da96345513964','patidar','13479837',3);
---------------------------------------------------------------------------------------------------------------------------
Insert into DRDOHCROOT.USERS (ID,UNAME,PASS,NAME,PHONE,PRIVILEGE) values (7,'baniya','7110eda4d09e062aa5e4a390b0a572ac0d2c0220','avinash barnwal','9124985272',3);
---------------------------------------------------------------------------------------------------------------------------
Insert into DRDOHCROOT.USERS (ID,UNAME,PASS,NAME,PHONE,PRIVILEGE) values (8,'dvd','7110eda4d09e062aa5e4a390b0a572ac0d2c0220','ashutosh','9698596486',2);
--------------------------------------------------------
--  Constraints for Table USERS
--------------------------------------------------------
---------------------------------------------------------------------------------------------------------------------------
  ALTER TABLE "DRDOHCROOT"."USERS" MODIFY ("PRIVILEGE" NOT NULL ENABLE);
  ---------------------------------------------------------------------------------------------------------------------------
  ALTER TABLE "DRDOHCROOT"."USERS" MODIFY ("PHONE" NOT NULL ENABLE);
  ---------------------------------------------------------------------------------------------------------------------------
  ALTER TABLE "DRDOHCROOT"."USERS" MODIFY ("NAME" NOT NULL ENABLE);
  ---------------------------------------------------------------------------------------------------------------------------
  ALTER TABLE "DRDOHCROOT"."USERS" MODIFY ("PASS" NOT NULL ENABLE);
  ---------------------------------------------------------------------------------------------------------------------------
  ALTER TABLE "DRDOHCROOT"."USERS" MODIFY ("UNAME" NOT NULL ENABLE);
  ---------------------------------------------------------------------------------------------------------------------------
  ALTER TABLE "DRDOHCROOT"."USERS" MODIFY ("ID" NOT NULL ENABLE);
  ---------------------------------------------------------------------------------------------------------------------------
--------------------------------------------------------
--  DDL for Trigger USERS_ID_TRIG
--------------------------------------------------------

  CREATE OR REPLACE TRIGGER "DRDOHCROOT"."USERS_ID_TRIG" BEFORE INSERT OR UPDATE ON users
FOR EACH ROW
DECLARE 
v_newVal NUMBER(12) := 0;
v_incval NUMBER(12) := 0;
BEGIN
  IF INSERTING AND :new.id IS NULL THEN
    SELECT  users_id_1SEQ.NEXTVAL INTO v_newVal FROM DUAL;
    -- If this is the first time this table have been inserted into (sequence == 1)
    IF v_newVal = 1 THEN 
      --get the max indentity value from the table
      SELECT NVL(max(id),0) INTO v_newVal FROM users;
      v_newVal := v_newVal + 1;
      --set the sequence to that value
      LOOP
           EXIT WHEN v_incval>=v_newVal;
           SELECT users_id_1SEQ.nextval INTO v_incval FROM dual;
      END LOOP;
    END IF;
   -- assign the value from the sequence to emulate the identity column
   :new.id := v_newVal;
  END IF;
END;
/
ALTER TRIGGER "DRDOHCROOT"."USERS_ID_TRIG" ENABLE;
---------------------------------------------------------------------------------------------------------------------------