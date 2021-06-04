<?php 

//homework1
"
CREATE TABLE new_agents AS
    SELECT DISTINCT
        agents.*
    FROM
        agents, customer
    WHERE
        agents.WORKING_AREA = 'London'
    AND
        agents.AGENT_CODE = customer.AGENT_CODE
    AND
        customer.CUST_COUNTRY = 'UK';

ALTER TABLE new_agents ADD PRIMARY KEY(AGENT_CODE);
";








//homework2
//土居作
"
UPDATE 
    agents
SET 
    COMMISSION = COMMISSION - 0.02																																
WHERE
    AGENT_CODE 
IN
 (   
    SELECT
        agents.AGENT_CODE
    FROM
        agents
    WHERE
        (SELECT COUNT(customer.AGENT_CODE)
         FROM customer
         WHERE customer.AGENT_CODE = agents.AGENT_CODE
        ) >= 2 
 )
";

//土居作
"update agents
set commission = commission-.02
where agent_code in (select agent_code
                        from customer
                        where payment_amt in (select min(payment_amt) from customer))";
//考え方
"update agent
set commission = commission-.02
where agent_code in (//customerテーブルのpayment_amtが最小のagent_code)";
                        
//customerテーブルのpayment_amtが最小のagent_code
"select agent_code
from customer
where payment_amt in (//customerテーブルのpayment_amtが最小の値)";

//customerテーブルのpayment_amtが最小の値
"select min(payment_amt) from customer";






//有賀君作
"
UPDATE 
	agents
SET 
	agents.COMISSION = agents.COMISSION - 2																																
WHERE
	agents.AGENT_CODE 
IN
 (   
     SELECT 
     	customer.AGENT_CODE 
     from 
     	customer
     GROUP BY 
     	customer.AGENT_CODE
     HAVING 
     	COUNT(customer.AGENT_CODE) > 2
  )
";

//homework3
"SELECT
	* 
FROM
	customer
	INNER JOIN agents ON customer.AGENT_CODE = agents.AGENT_CODE 
WHERE
	customer.GRADE = 3 
	AND NOT customer.CUST_COUNTRY = 'India'
	AND customer.OPENING_AMT < 7000 
	AND agents.COMMISSION < 0.12;
";
