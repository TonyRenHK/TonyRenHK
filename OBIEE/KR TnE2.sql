SUM(CASE WHEN  "Account Ledger"."Object.Subsidiary Account Code"  IN ('6130.300000','6130.100000','6130.200000')  THEN (CASE WHEN "Account Ledger"."Object.Subsidiary Account Code" NOT IN ('6130.110000','6130.500000','6130.400000','6130.600000') THEN "Account Ledger"."Actual Amount (TY)" ELSE 0 END ) ELSE 0 END) /1000




 "Account Ledger"."Object.Subsidiary Account Code" NOT IN ('6130.110000','6130.500000','6130.400000','6130.600000') 
 
 CASE WHEN "Listed Menue Price Header Dim"."Fiscal Year" = '@{Fiscal_Year}{FY1617}' AND "Listed Menue Price Header Dim"."Quarter" = '@{Quarter}{Q4}' AND "Venue"."Status" = 'Active' THEN ("Venue"."Venue Name") END
 
 
 
 
 
 
 
 
 (CASE WHEN  "Account Ledger"."Object.Subsidiary Account Code"  IN ('6130.300000','6130.100000','6130.200000') AND  "Account Ledger"."Object.Subsidiary Account Code" NOT IN ('6130.110000','6130.500000','6130.400000','6130.600000')  THEN  "Account Ledger"."Actual Amount (TY)"  ELSE 0 END) /1000
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 SUM(CASE WHEN   "Account Ledger"."Object.Subsidiary Account Code" IN ('6130.300000','6130.100000','6130.200000')  THEN CASE WHEN "Account Ledger"."Object.Subsidiary Account Code" NOT IN ('6130.110000','6130.500000','6130.400000','6130.600000') THEN "Account Ledger"."Actual Amount (TY)" ELSE 0 END ELSE 0 END) /1000
 
 
 
 
 
 
 
 
 
 
 CASE WHEN t1.object_subsidiary IN ('6130.300000','6130.100000','6130.200000')  THEN t1.TnE_actual ELSE 0 END) /
 
 
 
 
 CASE WHEN "Account Ledger"."Object.Subsidiary Account Code" NOT IN ('6130.110000','6130.500000','6130.400000','6130.600000') THEN "Account Ledger"."Actual Amount (TY)" ELSE 0 END
 
 
 
 
 TnE Details of Spending

Domestic Travel & Accomodation



External Entertainment


Team Entertainment



CASE WHEN "Account Ledger"."Object.Subsidiary Account Code" NOT IN ('6130.110000','6130.500000','6130.400000','6130.600000') THEN "Account Ledger"."Actual Amount (TY)" ELSE 0 END











02011007





















 
 SELECT saw_0, 
       saw_1, 
       saw_2, 
       saw_3, 
       saw_4, 
       saw_5, 
       saw_6, 
       saw_7, 
       saw_8, 
       saw_9, 
       saw_10, 
       saw_11, 
       saw_12, 
       saw_13, 
       saw_14, 
       saw_15, 
       saw_16, 
       saw_17, 
       saw_18, 
       saw_19, 
       saw_20, 
       saw_21, 
       saw_22, 
       saw_23, 
       saw_24, 
       saw_25, 
       saw_26, 
       saw_27, 
       saw_28, 
       report_aggregate(saw_5 by saw_0, saw_1, saw_2, saw_28), 
       report_aggregate(saw_6 BY saw_0, saw_1, saw_2, saw_28), 
       report_aggregate(saw_7 BY saw_0, saw_1, saw_2, saw_28), 
       report_aggregate(saw_8 BY saw_0, saw_1, saw_2, saw_28), 
       report_aggregate(saw_9 BY saw_0, saw_1, saw_2, saw_28), 
       report_aggregate(saw_10 BY saw_0, saw_1, saw_2, saw_28), 
       report_aggregate(saw_12 BY saw_0, saw_1, saw_2, saw_28), 
       report_aggregate(saw_11 BY saw_0, saw_1, saw_2, saw_28), 
       report_aggregate(saw_13 BY saw_0, saw_1, saw_2, saw_28), 
       report_aggregate(saw_15 BY saw_0, saw_1, saw_2, saw_28), 
       report_aggregate(saw_16 BY saw_0, saw_1, saw_2, saw_28), 
       report_aggregate(saw_17 BY saw_0, saw_1, saw_2, saw_28), 
       report_aggregate(saw_21 BY saw_0, saw_1, saw_2, saw_28), 
       report_aggregate(saw_22 BY saw_0, saw_1, saw_2, saw_28), 
       report_aggregate(saw_23 BY saw_0, saw_1, saw_2, saw_28) 
FROM   ( 
       ( 
              SELECT "Cost Center Category"."RP08 - Departmental"               saw_0, 
                     substring("Alternative Name"."Customer 2" FROM 10 FOR 100) saw_1, 
                     "Sub-Ledger/Customer"."Customer No"                        saw_2, 
                     "Sub-Ledger/Customer"."Customer Name"                      saw_3, 
                     sum( 
                     CASE 
                            WHEN "Account Ledger"."Object.Subsidiary Account Code" IN ('6130.300000',
                                                                                       '6130.100000',
                                                                                       '6130.200000') THEN (
                                   CASE 
                                          WHEN "Account Ledger"."Object.Subsidiary Account Code" NOT IN ('6130.110000',
                                                                                                         '6130.500000',
                                                                                                         '6130.400000',
                                                                                                         '6130.600000') THEN "Account Ledger"."Actual Amount (TY)"
                                          ELSE 0 
                                   END ) 
                            ELSE 0 
                     END) /1000                            saw_4, 
                     "Account Ledger"."Actual Amount (TY)" saw_5, 
                     "Account Ledger"."Actual Amount (TY)" saw_6, 
                     "Account Ledger"."Actual Amount (TY)" saw_7, 
                     "Account Ledger"."Actual Amount (TY)" saw_8, 
                     "Account Ledger"."Actual Amount (TY)" saw_9, 
                     "Account Ledger"."Actual Amount (TY)" saw_10, 
                     "Account Ledger"."Actual Amount (TY)" saw_11, 
                     "Account Ledger"."Actual Amount (TY)" saw_12, 
                     "Account Ledger"."Actual Amount (TY)" saw_13, 
                     "Account Ledger"."Budget Amount"      saw_14, 
                     CASE 
                            WHEN "Account Ledger"."Budget Amount"=0 THEN 0 
                            ELSE "Account Ledger"."Actual Amount (TY)"/"Account Ledger"."Budget Amount"
                     END                                                                    saw_15,
                     "Account Ledger"."Actual Amount (TY)"-"Account Ledger"."Budget Amount" saw_16, 
                     "Account Ledger"."Actual Amount (TY)"                                  saw_17,
                     "Account Ledger"."Budget Amount"                                       saw_18,
                     "Account Ledger"."Actual Open (TY)"                                    saw_19,
                     "Account Ledger"."Actual Open (TY)"                                    saw_20,
                     CASE 
                            WHEN "Account Ledger"."Object.Subsidiary Account Code" IN ('6130.110000') THEN "Account Ledger"."Actual Amount (TY)"
                            ELSE 0 
                     END saw_21, 
                     CASE 
                            WHEN "Account Ledger"."Object.Subsidiary Account Code" IN ('6130.500000',
                                                                                       '6130.400000',
                                                                                       '6130.600000') THEN "Account Ledger"."Actual Amount (TY)"
                            ELSE 0 
                     END                                          saw_22, 
                     "Account Ledger"."Actual Amount (TY)"        saw_23, 
                     "Account Ledger"."Budget Amount"             saw_24, 
                     "Account Ledger"."Budget Amount"             saw_25, 
                     "Account Ledger"."Budget Amount"             saw_26, 
                     "Cost Center Category"."RP08 - Departmental" saw_27, 
                     "Account Category"."Sales Region"            saw_28 
              FROM   "GL Summary (KR)" 
              WHERE  ( 
                            "Account Ledger"."Ledger Type" = 'AA') 
              AND    ( 
                            "Account Ledger"."Object.Subsidiary Account Code" IN ('6130.300000',
                                                                                  '6130.120000',
                                                                                  '6160.500000',
                                                                                  '6160.600000',
                                                                                  '6175.300000',
                                                                                  '6175.100000',
                                                                                  '6160.450000',
                                                                                  '6160.200000',
                                                                                  '6160.999998',
                                                                                  '6130.100000',
                                                                                  '6160.400000',
                                                                                  '6130.200000',
                                                                                  '6160.300000',
                                                                                  '6130.110000',
                                                                                  '6130.500000',
                                                                                  '6130.400000',
                                                                                  '6130.600000'))
              AND    ( 
                            "Period"."Period" BETWEEN 201501 AND    201508) 
              AND    ( 
                            "Cost Center Category"."RP13 - Hyperion Subsidiary (R) Code" IN ('222',
                                                                                             '286'))
              AND    ( 
                            ifnull("Account Ledger"."Actual Amount (TY)",0) <> 0)) 
UNION 
      ( 
             SELECT "Cost Center Category"."RP08 - Departmental"               saw_0, 
                    substring("Alternative Name"."Customer 2" FROM 10 FOR 100) saw_1, 
                    "Sub-Ledger/Customer"."Customer No"                        saw_2, 
                    "Sub-Ledger/Customer"."Customer Name"                      saw_3, 
                    0                                                          saw_4, 
                    "Account Ledger"."Actual Amount (TY)"                      saw_5, 
                    "Account Ledger"."Actual Amount (TY)"                      saw_6, 
                    "Account Ledger"."Actual Amount (TY)"                      saw_7, 
                    "Account Ledger"."Actual Amount (TY)"                      saw_8, 
                    "Account Ledger"."Actual Amount (TY)"                      saw_9, 
                    "Account Ledger"."Actual Amount (TY)"                      saw_10, 
                    "Account Ledger"."Actual Amount (TY)"                      saw_11, 
                    "Account Ledger"."Actual Amount (TY)"                      saw_12, 
                    "Account Ledger"."Actual Amount (TY)"                      saw_13, 
                    "Account Ledger"."Budget Amount"                           saw_14, 
                    CASE 
                           WHEN "Account Ledger"."Budget Amount"=0 THEN 0 
                           ELSE "Account Ledger"."Actual Amount (TY)"/"Account Ledger"."Budget Amount"
                    END                                                                    saw_15,
                    "Account Ledger"."Actual Amount (TY)"-"Account Ledger"."Budget Amount" saw_16, 
                    "Account Ledger"."Actual Amount (TY)"                                  saw_17,
                    "Account Ledger"."Budget Amount"                                       saw_18,
                    "Account Ledger"."Actual Open (TY)"                                    saw_19,
                    "Account Ledger"."Actual Open (TY)"                                    saw_20,
                    CASE 
                           WHEN "Account Ledger"."Object.Subsidiary Account Code" IN ('6130.110000') THEN "Account Ledger"."Actual Amount (TY)"
                           ELSE 0 
                    END saw_21, 
                    CASE 
                           WHEN "Account Ledger"."Object.Subsidiary Account Code" IN ('6130.500000',
                                                                                      '6130.400000',
                                                                                      '6130.600000') THEN "Account Ledger"."Actual Amount (TY)"
                           ELSE 0 
                    END                                          saw_22, 
                    "Account Ledger"."Actual Amount (TY)"        saw_23, 
                    "Account Ledger"."Budget Amount"             saw_24, 
                    "Account Ledger"."Budget Amount"             saw_25, 
                    "Account Ledger"."Budget Amount"             saw_26, 
                    "Cost Center Category"."RP08 - Departmental" saw_27, 
                    "Account Category"."Sales Region"            saw_28 
             FROM   "GL Summary (KR)" 
             WHERE  ( 
                           "Account Ledger"."Object.Subsidiary Account Code" IN ('6130.300000',
                                                                                 '6130.120000',
                                                                                 '6160.500000',
                                                                                 '6160.600000',
                                                                                 '6175.300000',
                                                                                 '6175.100000',
                                                                                 '6160.450000',
                                                                                 '6160.200000',
                                                                                 '6160.999998',
                                                                                 '6130.100000',
                                                                                 '6160.400000',
                                                                                 '6130.200000',
                                                                                 '6160.300000',
                                                                                 '6130.110000',
                                                                                 '6130.500000',
                                                                                 '6130.400000',
                                                                                 '6130.600000'))
             AND    ( 
                           "Cost Center Category"."RP13 - Hyperion Subsidiary (R) Code" IN ('222',
                                                                                            '286'))
             AND    ( 
                           ifnull("Account Ledger"."Budget Amount",0) <> 0) 
             AND    ( 
                           "Period"."Year" = '2015')) 
UNION 
      ( 
             SELECT "Cost Center Category"."RP08 - Departmental"               saw_0, 
                    substring("Alternative Name"."Customer 2" FROM 10 FOR 100) saw_1, 
                    "Sub-Ledger/Customer"."Customer No"                        saw_2, 
                    "Sub-Ledger/Customer"."Customer Name"                      saw_3, 
                    0                                                          saw_4, 
                    "Account Ledger"."Actual Amount (TY)"                      saw_5, 
                    "Account Ledger"."Actual Amount (TY)"                      saw_6, 
                    "Account Ledger"."Actual Amount (TY)"                      saw_7, 
                    "Account Ledger"."Actual Amount (TY)"                      saw_8, 
                    "Account Ledger"."Actual Amount (TY)"                      saw_9, 
                    "Account Ledger"."Actual Amount (TY)"                      saw_10, 
                    "Account Ledger"."Actual Amount (TY)"                      saw_11, 
                    "Account Ledger"."Actual Amount (TY)"                      saw_12, 
                    "Account Ledger"."Actual Amount (TY)"                      saw_13, 
                    "Account Ledger"."Budget Amount"                           saw_14, 
                    CASE 
                           WHEN "Account Ledger"."Budget Amount"=0 THEN 0 
                           ELSE "Account Ledger"."Actual Amount (TY)"/"Account Ledger"."Budget Amount"
                    END                                                                    saw_15,
                    "Account Ledger"."Actual Amount (TY)"-"Account Ledger"."Budget Amount" saw_16, 
                    "Account Ledger"."Actual Amount (TY)"                                  saw_17,
                    "Account Ledger"."Budget Amount"                                       saw_18,
                    "Account Ledger"."Actual Open (TY)"                                    saw_19,
                    "Account Ledger"."Actual Open (TY)"                                    saw_20,
                    CASE 
                           WHEN "Account Ledger"."Object.Subsidiary Account Code" IN ('6130.110000') THEN "Account Ledger"."Actual Amount (TY)"
                           ELSE 0 
                    END saw_21, 
                    CASE 
                           WHEN "Account Ledger"."Object.Subsidiary Account Code" IN ('6130.500000',
                                                                                      '6130.400000',
                                                                                      '6130.600000') THEN "Account Ledger"."Actual Amount (TY)"
                           ELSE 0 
                    END                                          saw_22, 
                    "Account Ledger"."Actual Amount (TY)"        saw_23, 
                    "Account Ledger"."Budget Amount"             saw_24, 
                    "Account Ledger"."Budget Amount"             saw_25, 
                    "Account Ledger"."Budget Amount"             saw_26, 
                    "Cost Center Category"."RP08 - Departmental" saw_27, 
                    "Account Category"."Sales Region"            saw_28 
             FROM   "GL Summary (KR)" 
             WHERE  ( 
                           "Account Ledger"."Object.Subsidiary Account Code" IN ('5551.100000',
                                                                                 '5551.100000',
                                                                                 '5551.200000',
                                                                                 '5553.200000',
                                                                                 '5553.200000',
                                                                                 '5553.300000',
                                                                                 '5553.310000',
                                                                                 '5553.400000',
                                                                                 '5553.400000',
                                                                                 '5553.400000',
                                                                                 '5553.500000',
                                                                                 '5553.500000',
                                                                                 '5553.500000',
                                                                                 '5556.100000',
                                                                                 '5556.100000',
                                                                                 '5556.100000',
                                                                                 '5556.500000',
                                                                                 '5558.100000',
                                                                                 '5558.200000',
                                                                                 '5558.200000',
                                                                                 '5558.200000',
                                                                                 '5558.200000',
                                                                                 '5558.200000',
                                                                                 '5559.100000',
                                                                                 '5559.100000',
                                                                                 '5559.100000',
                                                                                 '5559.100000',
                                                                                 '5559.300000',
                                                                                 '5559.400000',
                                                                                 '5559.500000',
                                                                                 '5559.500000',
                                                                                 '5559.500000',
                                                                                 '5559.600000',
                                                                                 '5559.600000',
                                                                                 '5559.700000',
                                                                                 '5559.700000',
                                                                                 '5559.700000',
                                                                                 '5582.100000',
                                                                                 '5586.100000',
                                                                                 '5586.100000',
                                                                                 '5586.100000',
                                                                                 '5586.100000'))
             AND    ( 
                           "Cost Center Category"."RP13 - Hyperion Subsidiary (R) Code" IN ('222',
                                                                                            '286'))
             AND    ( 
                           ifnull("Account Ledger"."Actual Amount (TY)",0) <> 0) 
             AND    ( 
                           "Account Ledger"."Original Reference 2" IN ('64125001', 
                                                                       '74125001')) 
             AND    ( 
                           "Account Ledger"."Ledger Type" = 'AA') 
             AND    ( 
                           "Period"."Period" BETWEEN 201501 AND    201508)) 
UNION 
         ( 
                SELECT "Cost Center Category"."RP08 - Departmental"               saw_0, 
                       substring("Alternative Name"."Customer 2" FROM 10 FOR 100) saw_1, 
                       "Sub-Ledger/Customer"."Customer No"                        saw_2, 
                       "Sub-Ledger/Customer"."Customer Name"                      saw_3, 
                       0                                                          saw_4, 
                       "Account Ledger"."Actual Amount (TY)"                      saw_5, 
                       "Account Ledger"."Actual Amount (TY)"                      saw_6, 
                       "Account Ledger"."Actual Amount (TY)"                      saw_7, 
                       "Account Ledger"."Actual Amount (TY)"                      saw_8, 
                       "Account Ledger"."Actual Amount (TY)"                      saw_9, 
                       "Account Ledger"."Actual Amount (TY)"                      saw_10, 
                       "Account Ledger"."Actual Amount (TY)"                      saw_11, 
                       "Account Ledger"."Actual Amount (TY)"                      saw_12, 
                       "Account Ledger"."Actual Amount (TY)"                      saw_13, 
                       "Account Ledger"."Budget Amount"                           saw_14, 
                       CASE 
                              WHEN "Account Ledger"."Budget Amount"=0 THEN 0 
                              ELSE "Account Ledger"."Actual Amount (TY)"/"Account Ledger"."Budget Amount"
                       END                                                                    saw_15,
                       "Account Ledger"."Actual Amount (TY)"-"Account Ledger"."Budget Amount" saw_16, 
                       "Account Ledger"."Actual Amount (TY)"                                  saw_17,
                       "Account Ledger"."Budget Amount"                                       saw_18,
                       "Account Ledger"."Actual Open (TY)"                                    saw_19,
                       "Account Ledger"."Actual Open (TY)"                                    saw_20,
                       CASE 
                              WHEN "Account Ledger"."Object.Subsidiary Account Code" IN ('6130.110000') THEN "Account Ledger"."Actual Amount (TY)"
                              ELSE 0 
                       END saw_21, 
                       CASE 
                              WHEN "Account Ledger"."Object.Subsidiary Account Code" IN ('6130.500000',
                                                                                         '6130.400000',
                                                                                         '6130.600000') THEN "Account Ledger"."Actual Amount (TY)"
                              ELSE 0 
                       END                                          saw_22, 
                       "Account Ledger"."Actual Amount (TY)"        saw_23, 
                       "Account Ledger"."Budget Amount"             saw_24, 
                       "Account Ledger"."Budget Amount"             saw_25, 
                       "Account Ledger"."Budget Amount"             saw_26, 
                       "Cost Center Category"."RP08 - Departmental" saw_27, 
                       "Account Category"."Sales Region"            saw_28 
                FROM   "GL Summary (KR)" 
                WHERE  ( 
                              "Period"."Year" = '2015') 
                AND    ( 
                              "Account Ledger"."Object.Subsidiary Account Code" IN ('5551.100000',
                                                                                    '5551.100000',
                                                                                    '5551.200000',
                                                                                    '5553.200000',
                                                                                    '5553.200000',
                                                                                    '5553.300000',
                                                                                    '5553.310000',
                                                                                    '5553.400000',
                                                                                    '5553.400000',
                                                                                    '5553.400000',
                                                                                    '5553.500000',
                                                                                    '5553.500000',
                                                                                    '5553.500000',
                                                                                    '5556.100000',
                                                                                    '5556.100000',
                                                                                    '5556.100000',
                                                                                    '5556.500000',
                                                                                    '5558.100000',
                                                                                    '5558.200000',
                                                                                    '5558.200000',
                                                                                    '5558.200000',
                                                                                    '5558.200000',
                                                                                    '5558.200000',
                                                                                    '5559.100000',
                                                                                    '5559.100000',
                                                                                    '5559.100000',
                                                                                    '5559.100000',
                                                                                    '5559.300000',
                                                                                    '5559.400000',
                                                                                    '5559.500000',
                                                                                    '5559.500000',
                                                                                    '5559.500000',
                                                                                    '5559.600000',
                                                                                    '5559.600000',
                                                                                    '5559.700000',
                                                                                    '5559.700000',
                                                                                    '5559.700000',
                                                                                    '5582.100000',
                                                                                    '5586.100000',
                                                                                    '5586.100000',
                                                                                    '5586.100000',
                                                                                    '5586.100000'))
                AND    ( 
                              "Cost Center Category"."RP13 - Hyperion Subsidiary (R) Code" IN ('222',
                                                                                               '286'))
                AND    ( 
                              ifnull("Account Ledger"."Budget Amount",0) <> 0))) t1 
ORDER BY saw_0, 
         saw_1, 
         saw_2, 
         saw_3, 
         saw_27, 
         saw_28
 
 
 
