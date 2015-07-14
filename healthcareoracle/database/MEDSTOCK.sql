--------------------------------------------------------
--  File created - Friday-July-03-2015   
--------------------------------------------------------
--------------------------------------------------------
--  DDL for Table MEDSTOCK
-----------------------------------------------------------------------------------------------------------------------------

  CREATE TABLE "DRDOHCROOT"."MEDSTOCK" 
   (	"SNO" NUMBER(10,0), 
	"MNAME" VARCHAR2(100 CHAR), 
	"TYPE" VARCHAR2(20 CHAR), 
	"VOL" NUMBER(10,0), 
	"QUANT" NUMBER(10,0), 
	"MDATE" VARCHAR2(100 CHAR), 
	"EDATE" VARCHAR2(100 CHAR), 
	"CMP" VARCHAR2(100 CHAR), 
	"BNO" VARCHAR2(20 CHAR), 
	"PRICE" NUMBER
   ) SEGMENT CREATION IMMEDIATE 
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS" ;
-----------------------------------------------------------------------------------------------------------------------------
Insert into DRDOHCROOT.MEDSTOCK (SNO,MNAME,TYPE,VOL,QUANT,MDATE,EDATE,CMP,BNO,PRICE) values (2,'paracetamol','tablet',500,2935,'2015-06-01','2015-10-08','paracetamol','AJFJJH687',12);
-----------------------------------------------------------------------------------------------------------------------------
Insert into DRDOHCROOT.MEDSTOCK (SNO,MNAME,TYPE,VOL,QUANT,MDATE,EDATE,CMP,BNO,PRICE) values (5,'disprin','tablet',500,843,'2015-06-16','2015-07-02','vdhai dhaiv','154889',10.8);
-----------------------------------------------------------------------------------------------------------------------------
Insert into DRDOHCROOT.MEDSTOCK (SNO,MNAME,TYPE,VOL,QUANT,MDATE,EDATE,CMP,BNO,PRICE) values (7,'nemoslide','tablet',1000,5818,'2015-06-25','2015-06-29','wt','23m4l2k36983',35);
-----------------------------------------------------------------------------------------------------------------------------
Insert into DRDOHCROOT.MEDSTOCK (SNO,MNAME,TYPE,VOL,QUANT,MDATE,EDATE,CMP,BNO,PRICE) values (8,'rabeprazole','tablet',500,1000,'2015-06-03','2015-10-29','paracetamol tabs.','1571854',12);
--------------------------------------------------------
--  Constraints for Table MEDSTOCK
--------------------------------------------------------
-----------------------------------------------------------------------------------------------------------------------------
  ALTER TABLE "DRDOHCROOT"."MEDSTOCK" MODIFY ("MNAME" NOT NULL ENABLE);
  -----------------------------------------------------------------------------------------------------------------------------
  ALTER TABLE "DRDOHCROOT"."MEDSTOCK" MODIFY ("SNO" NOT NULL ENABLE);
--------------------------------------------------------
--  DDL for Trigger MEDSTOCK_SNO_TRIG
--------------------------------------------------------
-----------------------------------------------------------------------------------------------------------------------------
  CREATE OR REPLACE TRIGGER "DRDOHCROOT"."MEDSTOCK_SNO_TRIG" BEFORE INSERT OR UPDATE ON medstock
FOR EACH ROW
DECLARE 
v_newVal NUMBER(12) := 0;
v_incval NUMBER(12) := 0;
BEGIN
  IF INSERTING AND :new.sno IS NULL THEN
    SELECT  medstock_sno_1SEQ.NEXTVAL INTO v_newVal FROM DUAL;
    -- If this is the first time this table have been inserted into (sequence == 1)
    IF v_newVal = 1 THEN 
      --get the max indentity value from the table
      SELECT NVL(max(sno),0) INTO v_newVal FROM medstock;
      v_newVal := v_newVal + 1;
      --set the sequence to that value
      LOOP
           EXIT WHEN v_incval>=v_newVal;
           SELECT medstock_sno_1SEQ.nextval INTO v_incval FROM dual;
      END LOOP;
    END IF;
   -- assign the value from the sequence to emulate the identity column
   :new.sno := v_newVal;
  END IF;
END;
/
ALTER TRIGGER "DRDOHCROOT"."MEDSTOCK_SNO_TRIG" ENABLE;
-----------------------------------------------------------------------------------------------------------------------------