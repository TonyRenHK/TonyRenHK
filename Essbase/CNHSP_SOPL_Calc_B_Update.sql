SET CACHE DEFAULT;
SET UPDATECALC OFF;
SET CLEARUPDATESTATUS OFF;
SET LOCKBLOCK HIGH;

/* Aggregate Brand for Calculation */
FIX("TIM_9L","TIB_9L")
FIX(@RELATIVE("YearTotal",0))
FIX("Int_YTD")
FIX("HSP_InputValue")
FIX({CNHSP_Year})
FIX(@RELATIVE("Total_Entity",0))
FIX("No_Channel")
FIX(@RELATIVE("PLSO_Region",0))
FIX({CNHSP_Version})
FIX("B")
FIX("No_Department")
FIX("Local")
      
       @IDESCENDANTS("Calculation_Group");
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




/************* Calculate Vol per 9KL (Sell-out) *******************/
/* Calculate for all selected scenario */
FIX(@RELATIVE("YearTotal",0))
FIX("Int_YTD")
FIX("HSP_InputValue")
FIX(@RELATIVE("Total_Entity",0))
FIX(@RELATIVE("PLSO_Region",0))
FIX("No_Channel")
FIX({CNHSP_Year})
FIX({CNHSP_Version})
FIX("B")
FIX("No_Department")
FIX("Local")
FIX(@CHILDREN("Calculation_Group"))

/* Calculate Gross Sales*/
/*East and Central region is added
FIX("No_Department")
SET CREATENONMISSINGBLK ON;
"3010.000K9L_SO" =  @SPARENTVAL(Region, "3010.000K9L" -> "Total_Channel" -> "Total_Entity" -> "CNY") - "TIM_9L" / 1000;

SET CREATENONMISSINGBLK OFF;
ENDFIX
*/
SET CREATENONMISSINGBLK ON;
"3010.000K9L_SO"(
IF(@ISMBR("20") or @ISMBR("60") or @ISMBR("30") or @ISMBR("40") or @ISMBR("Premium"))
"3010.000K9L_SO" =  "3010.000K9L" -> "Total_Channel" -> "CNY" + "TIM_9L" / 1000;
ELSE
"3010.000K9L_SO" =  @SPARENTVAL(Region, "3010.000K9L" -> "Total_Channel" -> "CNY") + "TIM_9L" / 1000;
ENDIF
)

ENDFIX
FIX(@CHILDREN("SubBrand_Group"))
"3010.000K9L_SO" = @SPARENTVAL(Brand, "3010.000K9L_SO");
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



/* Aggregate Brand for Calculation */
FIX("GS_Adj","AD_Adj","NS_Adj","CM_Adj","CMBS_Adj")
FIX(@RELATIVE("YearTotal",0))
FIX("Int_YTD")
FIX("HSP_InputValue")
FIX({CNHSP_Year})
FIX(@RELATIVE("Total_Entity",0))
FIX("No_Channel")
FIX(@RELATIVE("PLSO_Region",0))
FIX({CNHSP_Version})
FIX("B")
FIX("No_Department")
FIX("Local")
      
       @IDESCENDANTS("Calculation_Group");
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


FIX(@RELATIVE("YearTotal",0))
FIX("Int_YTD")
FIX("HSP_InputValue")
FIX(@RELATIVE("Total_Entity",0))
FIX(@RELATIVE("PLSO_Region",0))
FIX("No_Channel")
FIX({CNHSP_Year})
FIX({CNHSP_Version})
FIX("B")
FIX("No_Department")
FIX("Local")
FIX(@CHILDREN("SubBrand_Group"))

/* Calculate Stock Value with VAT*/

SET CREATENONMISSINGBLK ON;
/* hardcode is accepted by Braeden on 16 Jun 2015*/
/*"StkValVAT" = "GS_Tot" * (1 + "HVAT" -> "BegBalance" -> "Int" -> "No_Region" -> "No Brand" -> "No_Entity"-> "No_Entity") * "TIB_9L" * 9;*/
"StkValVAT" = "GS_Tot" * 1.17 * "TIB_9L" * 9;
"TIM_GS"= "GS_Tot"* "TIM_9L" * 9;
"TIM_AD"= "AD_Tot"* "TIM_9L" * 9;
"TIM_NS"= "NS_Tot"* "TIM_9L" * 9;
"TIM_CMBS"= "CMBS_Tot"* "TIM_9L" * 9;

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


/* ***************************************************************************************** */
/* ****************************** For YTD Conversion *************************************** */
/* ***************************************************************************************** */
/* Copy data for calculations */

SET COPYMISSINGBLOCK OFF;
FIX(@RELATIVE("YearTotal",0))
FIX("TIM_GS","TIM_AD","TIM_NS","TIM_CM","StkValVAT")
FIX("No_Channel")
FIX(@RELATIVE("Total_Entity",0))
FIX(@RELATIVE("PLSO_Region",0))
FIX("No_Department")
FIX(@RELATIVE("SubBrand_Group",0))
FIX("Local")
FIX("HSP_InputValue")
FIX({CNHSP_Year})
FIX("B")
FIX({CNHSP_Version})


DATACOPY "Int_YTD" TO "Int";

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




FIX("TIM_GS","TIM_AD","TIM_NS","TIM_CM","TIM_CMBS","StkValVAT","3010.000K9L_SO")
FIX("No_Channel")
FIX(@RELATIVE("Total_Entity",0))
FIX(@RELATIVE("PLSO_Region",0))
FIX("No_Department")
FIX(@RELATIVE("SubBrand_Group",0))
FIX("Local")
FIX("HSP_InputValue")
FIX({CNHSP_Year})
FIX("B")
FIX({CNHSP_Version})
FIX("Int")

"Jul" (
"Jul" = "Jul" -> "Int_YTD"; 
"Aug" = "Aug" -> "Int_YTD" - "Jul" -> "Int_YTD";
"Sep" = "Sep" -> "Int_YTD" - "Aug" -> "Int_YTD";
"Oct" = "Oct" -> "Int_YTD" - "Sep" -> "Int_YTD";
"Nov" = "Nov" -> "Int_YTD" - "Oct" -> "Int_YTD";
"Dec" = "Dec" -> "Int_YTD" - "Nov" -> "Int_YTD";
"Jan" = "Jan" -> "Int_YTD" - "Dec" -> "Int_YTD";
"Feb" = "Feb" -> "Int_YTD" - "Jan" -> "Int_YTD";
"Mar" = "Mar" -> "Int_YTD" - "Feb" -> "Int_YTD";
"Apr" = "Apr" -> "Int_YTD" - "Mar" -> "Int_YTD";
"May" = "May" -> "Int_YTD" - "Apr" -> "Int_YTD";
"Jun" = "Jun" -> "Int_YTD" - "May" -> "Int_YTD";

)

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


