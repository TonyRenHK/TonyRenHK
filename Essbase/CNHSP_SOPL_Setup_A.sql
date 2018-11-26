SET CACHE DEFAULT;
SET UPDATECALC OFF;
SET CLEARUPDATESTATUS OFF;
SET LOCKBLOCK HIGH;
/* SET CREATEBLOCKONEQ ON*/

/************* Calculate PL per 9 Litre *******************/
/* Calculate for all selected scenario */
FIX("Jul":&ActMonth)
FIX("Int_YTD")
FIX("HSP_InputValue")
FIX(@RELATIVE("Total_Entity",0))
FIX(@RELATIVE("PLSO_Region",0))
FIX("No_Channel")
FIX({CNHSP_Year})
FIX({CNHSP_Version})
FIX("A")
FIX("No_Department")
FIX("Local")
FIX(@CHILDREN("Calculation_Group"))

/* Calculate Gross Sales*/
/* Braeden: it is possible to see the sell out P&L and volume for all available entities, so it's by entity. 20150527 */
SET CREATENONMISSINGBLK ON;
"GS_L"(
IF(@ISMBR("20") or @ISMBR("60"))
"GS_L" =  "3010.0000GS" -> "Total_Channel" -> "CNY" / "3010.000K9L" -> "Total_Channel" -> "CNY" / 1000 / 9;
"AD_L" =  "5235.020000" -> "Total_Channel" -> "CNY" / "3010.000K9L" -> "Total_Channel" -> "CNY" / 1000 / 9;
"NS_L" =  ("Net Sales Incl. T&D" -> "Total_Channel" -> "CNY" - "5275.010000" -> "Total_Channel" -> "CNY") / "3010.000K9L" -> "Total_Channel" -> "CNY" / 1000 / 9;
/* "CM_L" =  "Cont. Margin ST Excl. Fx" -> "Total_Channel" -> "CNY" / "3010.000K9L" -> "Total_Channel" -> "CNY" / 1000/ 9;*/
"CMBS_L" =  ("Cont. Margin ST Excl. Fx" -> "Total_Channel" -> "CNY" - "5275.010000" -> "Total_Channel" -> "CNY") / "3010.000K9L" -> "Total_Channel" -> "CNY" / 1000/ 9;

ELSE

"GS_L" =  @SPARENTVAL(Region, "3010.0000GS" -> "Total_Channel" -> "CNY")/@SPARENTVAL(Region, "3010.000K9L" -> "Total_Channel" -> "CNY") / 1000 / 9;
"AD_L" =  @SPARENTVAL(Region, "5235.020000" -> "Total_Channel" -> "CNY") /@SPARENTVAL(Region, "3010.000K9L" -> "Total_Channel" -> "CNY") / 1000 / 9;
"NS_L" =  (@SPARENTVAL(Region, "Net Sales Incl. T&D" -> "Total_Channel" -> "CNY") - @SPARENTVAL(Region, "5275.010000" -> "Total_Channel" -> "CNY")) / @SPARENTVAL(Region, "3010.000K9L" -> "Total_Channel" -> "CNY") / 1000 / 9;
/* "CM_L" =  @SPARENTVAL(Region, "Cont. Margin ST Excl. Fx" -> "Total_Channel" -> "CNY") / @SPARENTVAL(Region, "3010.000K9L" -> "Total_Channel" -> "CNY") / 1000 / 9;*/
"CMBS_L" =  (@SPARENTVAL(Region, "Cont. Margin ST Excl. Fx" -> "Total_Channel" -> "CNY") - @SPARENTVAL(Region, "5275.010000" -> "Total_Channel" -> "CNY")) / @SPARENTVAL(Region, "3010.000K9L" -> "Total_Channel" -> "CNY") / 1000 / 9;
ENDIF
)
ENDFIX

FIX(@RELATIVE("SubBrand_Group",0))
"GS_L" =  @SPARENTVAL(Brand);
"AD_L" =  @SPARENTVAL(Brand);
"NS_L" =  @SPARENTVAL(Brand);
/* "CM_L" =  @SPARENTVAL(Brand);*/
"CMBS_L" =  @SPARENTVAL(Brand);

SET CREATENONMISSINGBLK OFF;

ENDFIX
ENDFIX
ENDFIX
ENDFIX
ENDFIX
ENDFIX
ENDFIX
ENDFIX
ENDFIX
ENDFIX
ENDFIX
ENDFIX

