--------------------------------------------------------
--  File created - Friday-July-03-2015   
--------------------------------------------------------
--------------------------------------------------------
--  DDL for Table JUNSTATUS
--------------------------------------------------------
-------------------------------------------------------------------------------------------------------------------------
  CREATE TABLE "DRDOHCROOT"."JUNSTATUS" 
   (	"SNO" NUMBER(10,0), 
	"MNAME" VARCHAR2(100 CHAR), 
	"TYPE" VARCHAR2(20 CHAR), 
	"VOL" NUMBER(10,0), 
	"QUANT" NUMBER(10,0), 
	"PRICE" NUMBER
   ) SEGMENT CREATION IMMEDIATE 
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS" ;
-------------------------------------------------------------------------------------------------------------------------
Insert into DRDOHCROOT.JUNSTATUS (SNO,MNAME,TYPE,VOL,QUANT,PRICE) values (1,'paracetamol','tablet',500,10,12);
-------------------------------------------------------------------------------------------------------------------------
--------------------------------------------------------
--  Constraints for Table JUNSTATUS
--------------------------------------------------------
-------------------------------------------------------------------------------------------------------------------------
  ALTER TABLE "DRDOHCROOT"."JUNSTATUS" MODIFY ("MNAME" NOT NULL ENABLE);
  -------------------------------------------------------------------------------------------------------------------------
  ALTER TABLE "DRDOHCROOT"."JUNSTATUS" MODIFY ("SNO" NOT NULL ENABLE);
  -------------------------------------------------------------------------------------------------------------------------
--------------------------------------------------------
--  DDL for Trigger JUNSTATUS_SNO_TRIG
--------------------------------------------------------
-------------------------------------------------------------------------------------------------------------------------
  CREATE OR REPLACE TRIGGER "DRDOHCROOT"."JUNSTATUS_SNO_TRIG" BEFORE INSERT OR UPDATE ON junstatus
FOR EACH ROW
DECLARE 
v_newVal NUMBER(12) := 0;
v_incval NUMBER(12) := 0;
BEGIN
  IF INSERTING AND :new.sno IS NULL THEN
    SELECT  junstatus_sno_SEQ.NEXTVAL INTO v_newVal FROM DUAL;
    -- If this is the first time this table have been inserted into (sequence == 1)
    IF v_newVal = 1 THEN 
      --get the max indentity value from the table
      SELECT NVL(max(sno),0) INTO v_newVal FROM junstatus;
      v_newVal := v_newVal + 1;
      --set the sequence to that value
      LOOP
           EXIT WHEN v_incval>=v_newVal;
           SELECT junstatus_sno_SEQ.nextval INTO v_incval FROM dual;
      END LOOP;
    END IF;
   -- assign the value from the sequence to emulate the identity column
   :new.sno := v_newVal;
  END IF;
END;
/
ALTER TRIGGER "DRDOHCROOT"."JUNSTATUS_SNO_TRIG" ENABLE;
-------------------------------------------------------------------------------------------------------------------------