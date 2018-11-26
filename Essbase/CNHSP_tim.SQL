SET CACHE DEFAULT;
SET UPDATECALC OFF;
SET CLEARUPDATESTATUS OFF;
SET LOCKBLOCK HIGH;

/************* Calculate Trade Inventory Movement *******************/
/* Calculate Allowance and Discount based on Input Percentage for Budget */
FIX(@RELATIVE("YearTotal",0))
FIX("Int_YTD")
FIX("HSP_InputValue")
FIX({CNHSP_Entity})
FIX({CNHSP_Region})
FIX("No_Channel")
FIX({CNHSP_Year})
FIX({CNHSP_Version})
FIX({CNHSP_Scenario})
FIX("No_Department")
FIX("Local")
FIX(@RELATIVE("SubBrand_Group",0))

/* Calculate Trade Inventory Movement  */
	"TIM_9L"=  "TIB_9L"-> "BegBalance"- "TIB_9L";

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



