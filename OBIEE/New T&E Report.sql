SELECT t2.departmental saw_0, t2.customer_2 saw_1, t2.customer_no saw_2, t2.customer_name saw_3, t2.TnE_act_Travel saw_4, t2.TnE_act_Dom_Fuel saw_5, t2.TnE_act_Trade_Rel saw_6, t2.TnE_act_Ext_Ent saw_7, t2.TnE_act_Team_Ent saw_8, t2.TnE_act_OT_Meals saw_9, t2.TnE_act_Assoc_Fee saw_10, t2.TnE_act_FG saw_11, t2.TnE_act_Unsettle saw_12, t2.TnE_actual saw_13, t2.TnE_budget saw_14, t2.TnE_vs_bud_pct saw_15, t2.TnE_remain saw_16, t2.trade_AnP_actual saw_17, t2.trade_AnP_budget saw_18, t2.AnP_vs_bud_pct saw_19, t2.AnP_remain saw_20, t2.tot_actual saw_21, t2.tot_budget saw_22, t2.tot_vs_bud_pct saw_23, t2.tot_remain saw_24, t2.TnE_proxy_driver saw_25, t2.TnE_oversea_trip saw_26, t2.department saw_27, t2.region saw_28, t2.unit_display saw_29, REPORT_AGGREGATE("t2"."TnE_vs_bud_pct" BY "t2"."customer_2","t2"."customer_no","t2"."department","t2"."region"), REPORT_AGGREGATE("t2"."AnP_vs_bud_pct" BY "t2"."customer_2","t2"."customer_no","t2"."department","t2"."region"), REPORT_AGGREGATE("t2"."tot_vs_bud_pct" BY "t2"."customer_2","t2"."customer_no","t2"."department","t2"."region") FROM (		
SELECT 
		 t1.departmental            AS departmental      
		,t1.customer_2              AS customer_2        
		,t1.customer_no             AS customer_no        
		,t1.customer_name           AS customer_name     		
		,t1.department							AS department
		,t1.region                  AS region    
		,'T' as unit_input
		,CASE unit_input 
		     WHEN 'T' THEN  'Thousand'
		     WHEN 'M' THEN 'Million'
		    ELSE 'Unit' END as unit_display
		,CASE unit_input 
		     WHEN 'T' THEN 1000 
		     WHEN 'M' THEN 1000000
		    ELSE 1 END as unit_factor
		,SUM(CASE WHEN t1.object_subsidiary IN ('6130.300000','6130.100000','6130.200000')  THEN t1.TnE_actual ELSE 0 END) /unit_factor 	as TnE_act_Travel
		,SUM(CASE WHEN t1.object_subsidiary IN ('6130.120000') THEN t1.TnE_actual ELSE 0 END)/unit_factor  															as TnE_act_Dom_Fuel
		,SUM(CASE WHEN t1.object_subsidiary IN ('6160.500000','6160.400000','6160.300000') THEN t1.TnE_actual ELSE 0 END)/unit_factor  	as TnE_act_Trade_Rel
		,SUM(CASE WHEN t1.object_subsidiary IN ('6160.600000') THEN t1.TnE_actual ELSE 0 END)/unit_factor  															as TnE_act_Ext_Ent
		,SUM(CASE WHEN t1.object_subsidiary IN ('6175.300000') THEN t1.TnE_actual ELSE 0 END)/unit_factor  															as TnE_act_Team_Ent
		,SUM(CASE WHEN t1.object_subsidiary IN ('6175.100000') THEN t1.TnE_actual ELSE 0 END)/unit_factor  															as TnE_act_OT_Meals
		,SUM(CASE WHEN t1.object_subsidiary IN ('6160.450000') THEN t1.TnE_actual ELSE 0 END)/unit_factor  															as TnE_act_Assoc_Fee
		,SUM(CASE WHEN t1.object_subsidiary IN ('6160.200000') THEN t1.TnE_actual ELSE 0 END)/unit_factor  															as TnE_act_FG
		,SUM(CASE WHEN t1.object_subsidiary IN ('6160.999998') THEN t1.TnE_actual ELSE 0 END)/unit_factor  															as TnE_act_Unsettle  
		,SUM(t1.TnE_actual )/unit_factor AS TnE_actual        
		,SUM(t1.TnE_budget )/unit_factor AS TnE_budget        
		,CASE WHEN TnE_budget = 0 THEN 0 ELSE TnE_actual/TnE_budget*100 END AS TnE_vs_bud_pct
		,TnE_budget - TnE_actual	AS TnE_remain
		,SUM(IFNULL(t1.trade_AnP_actual,0) )/unit_factor   AS trade_AnP_actual  
		,SUM(IFNULL(t1.trade_AnP_budget,0) )/unit_factor   AS trade_AnP_budget  
		,CASE WHEN trade_AnP_budget = 0 THEN 0 ELSE trade_AnP_actual/trade_AnP_budget*100 END AS AnP_vs_bud_pct
		,trade_AnP_budget - trade_AnP_actual	AS AnP_remain
		,TnE_actual + trade_AnP_actual AS tot_actual
		,TnE_budget       + trade_AnP_budget AS tot_budget		
		,CASE WHEN tot_budget = 0 THEN 0 ELSE tot_actual/tot_budget*100 END AS tot_vs_bud_pct
		,tot_budget - tot_actual	AS tot_remain
		,SUM(t1.TnE_proxy_driver ) /unit_factor  AS TnE_proxy_driver
		,SUM(t1.TnE_oversea_trip ) /unit_factor  AS TnE_oversea_trip 
		FROM (
				SELECT 
				 t0.departmental        departmental      
				,t0.object_subsidiary   object_subsidiary 
				,t0.customer_2          customer_2        
				,t0.customer_no         customer_no          
				,t0.customer_name       customer_name        
				,t0.department					department
				,t0.region    				  region    
				,t0.TnE_actual          TnE_actual
				,t0.TnE_proxy_driver    TnE_proxy_driver        
				,t0.TnE_oversea_trip    TnE_oversea_trip  
				,t0.TnE_budget          TnE_budget        
				,t0.trade_AnP_actual    trade_AnP_actual  
				,t0.trade_AnP_budget    trade_AnP_budget  
				FROM (
						/******************************************************************************
						 	Part 1 Getting Acutal and Budget T&E amount (Hard Code object key)
						******************************************************************************/
						SELECT 
						   "Cost Center Category"."RP08 - Departmental" 								departmental
						 , "Account Ledger"."Object.Subsidiary Account Code" 						object_subsidiary
						 , SUBSTRING("Alternative Name"."Customer 2" FROM 10 FOR 10000) customer_2
						 , "Sub-Ledger/Customer"."Customer No"													customer_no
						 , "Sub-Ledger/Customer"."Customer Name"												customer_name
						 , "Account Category"."Dept/Sales Team"										department
						 , "Account Category"."Sales Region"												region
						 , CASE WHEN "Account Ledger"."Object.Subsidiary Account Code" NOT IN ('6130.110000','6130.500000','6130.400000','6130.600000') THEN "Account Ledger"."Actual Amount (TY)" ELSE 0 END TnE_actual
						 , CASE WHEN "Account Ledger"."Object.Subsidiary Account Code" IN     ('6130.110000') THEN "Account Ledger"."Actual Amount (TY)" ELSE 0 END 																					TnE_proxy_driver
						 , CASE WHEN "Account Ledger"."Object.Subsidiary Account Code" IN     ('6130.500000','6130.400000','6130.600000') THEN "Account Ledger"."Actual Amount (TY)" ELSE 0 END 							TnE_oversea_trip 
						 , 0 																														TnE_budget
						 , 0 																														trade_AnP_actual
						 , 0 																														trade_AnP_budget
						FROM "GL Summary (KR)" 
						WHERE "Account Ledger"."Ledger Type" = 'AA' 
						 AND "Account Ledger"."Object.Subsidiary Account Code" IN ('6130.300000', '6130.120000', '6160.500000', '6160.600000', '6175.300000', '6175.100000', '6160.450000', '6160.200000', '6160.999998', '6130.100000', '6160.400000', '6130.200000', '6160.300000','6130.110000','6130.500000','6130.400000','6130.600000')
						 AND "Period"."Period" BETWEEN SUBSTRING('201508', 1, 4)||'01' and 201508
						 AND "Cost Center Category"."RP13 - Hyperion Subsidiary (R) Code" IN ('222', '286')
						 AND IFNULL("Account Ledger"."Actual Amount (TY)",0) <> 0
						UNION ALL 
						 SELECT 
						   "Cost Center Category"."RP08 - Departmental" 								departmental
						 , 'xx'                                                         object_subsidiary
						 , SUBSTRING("Alternative Name"."Customer 2" FROM 10 FOR 10000) customer_2
						 , "Sub-Ledger/Customer"."Customer No"													customer_no
						 , "Sub-Ledger/Customer"."Customer Name"												customer_name
						 , "Account Category"."Dept/Sales Team"										department
						 , "Account Category"."Sales Region"												region
						 , 0 																														TnE_actual
						 , 0 																														TnE_proxy_driver 
						 , 0 																														TnE_oversea_trip 
						 , IFNULL("Account Ledger"."Budget Amount",0) 								  TnE_budget
						 , 0 																														trade_AnP_actual
						 , 0 																														trade_AnP_budget
						FROM "GL Summary (KR)" 
						WHERE "Period"."Year" = SUBSTRING('201508', 1, 4)
						 AND "Account Ledger"."Object.Subsidiary Account Code" IN ('6130.300000', '6130.120000', '6160.500000', '6160.600000', '6175.300000', '6175.100000', '6160.450000', '6160.200000', '6160.999998', '6130.100000', '6160.400000', '6130.200000', '6160.300000','6130.110000','6130.500000','6130.400000','6130.600000')
						 AND "Cost Center Category"."RP13 - Hyperion Subsidiary (R) Code" IN ('222', '286')
						 AND IFNULL("Account Ledger"."Budget Amount",0) <> 0
						 UNION ALL				
						/****************************************************************************** 
							Part 2 Getting Acutal and Budget Trade A&P amount (PS_VAR_trade_AnP_OBJECT) + Actual filter Reference 2
						******************************************************************************/
						SELECT 
						   "Cost Center Category"."RP08 - Departmental" 								departmental
						 , 'xx'                                                         object_subsidiary
						 , SUBSTRING("Alternative Name"."Customer 2" FROM 10 FOR 10000) customer_2
						 , "Sub-Ledger/Customer"."Customer No"													customer_no
						 , "Sub-Ledger/Customer"."Customer Name"												customer_name
						 , "Account Category"."Dept/Sales Team"										department
						 , "Account Category"."Sales Region"												region
						 , 0 																														TnE_actual
						 , 0 																														TnE_proxy_driver 
						 , 0 																														TnE_oversea_trip 
						 , 0 																														TnE_budget
						 , "Account Ledger"."Actual Amount (TY)" 												trade_AnP_actual
						 , 0 																														trade_AnP_budget
						FROM "GL Summary (KR)" 
						WHERE "Account Ledger"."Ledger Type" = 'AA' 
						 AND "Account Ledger"."Original Reference 2" in ('64125001', '74125001')
						 AND "Account Ledger"."Object.Subsidiary Account Code" IN ('5551.100000','5551.100000','5551.200000','5553.200000','5553.200000','5553.300000','5553.310000','5553.400000','5553.400000','5553.400000','5553.500000','5553.500000','5553.500000','5556.100000','5556.100000','5556.100000','5556.500000','5558.100000','5558.200000','5558.200000','5558.200000','5558.200000','5558.200000','5559.100000','5559.100000','5559.100000','5559.100000','5559.300000','5559.400000','5559.500000','5559.500000','5559.500000','5559.600000','5559.600000','5559.700000','5559.700000','5559.700000','5582.100000','5586.100000','5586.100000','5586.100000','5586.100000')
						 AND "Period"."Period" BETWEEN SUBSTRING('201508', 1, 4)||'01' and 201508
						 AND "Cost Center Category"."RP13 - Hyperion Subsidiary (R) Code" IN ('222', '286')
						 AND IFNULL("Account Ledger"."Actual Amount (TY)",0) <> 0
						UNION ALL 
						 SELECT 
						   "Cost Center Category"."RP08 - Departmental" 								departmental
						 , 'xx'                                                         object_subsidiary
						 , SUBSTRING("Alternative Name"."Customer 2" FROM 10 FOR 10000) customer_2
						 , "Sub-Ledger/Customer"."Customer No"													customer_no
						 , "Sub-Ledger/Customer"."Customer Name"												customer_name
						 , "Account Category"."Dept/Sales Team"										department
						 , "Account Category"."Sales Region"												region
						 , 0 																														TnE_actual
						 , 0 																														TnE_proxy_driver 
						 , 0 																														TnE_oversea_trip 
						 , 0 																														TnE_budget
						 , 0 																														trade_AnP_actual
						 , IFNULL("Account Ledger"."Budget Amount",0) 								  trade_AnP_budget
						FROM "GL Summary (KR)" 
						WHERE "Period"."Year" =  SUBSTRING('201508', 1, 4)
						 AND "Account Ledger"."Object.Subsidiary Account Code" IN ('5551.100000','5551.100000','5551.200000','5553.200000','5553.200000','5553.300000','5553.310000','5553.400000','5553.400000','5553.400000','5553.500000','5553.500000','5553.500000','5556.100000','5556.100000','5556.100000','5556.500000','5558.100000','5558.200000','5558.200000','5558.200000','5558.200000','5558.200000','5559.100000','5559.100000','5559.100000','5559.100000','5559.300000','5559.400000','5559.500000','5559.500000','5559.500000','5559.600000','5559.600000','5559.700000','5559.700000','5559.700000','5582.100000','5586.100000','5586.100000','5586.100000','5586.100000')
						 AND "Cost Center Category"."RP13 - Hyperion Subsidiary (R) Code" IN ('222', '286')
						 AND IFNULL("Account Ledger"."Budget Amount",0) <> 0
				) t0 
		) t1 
GROUP BY  
 t1.departmental      
,t1.customer_2        
,t1.customer_no          
,t1.customer_name         
,t1.department
,t1.region    
) t2 ORDER BY saw_0, saw_1, saw_2, saw_3, saw_27, saw_28, saw_29
