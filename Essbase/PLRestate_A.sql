SET CACHE DEFAULT;
SET UPDATECALC OFF;
SET CLEARUPDATESTATUS OFF;
SET LOCKBLOCK HIGH;

/* Setup Exchange Rates for calculation */
FIX("Version","Currency","Brand","Data","Department","Region","Channel")
FIX(@REMOVE(@DESCENDANTS("Account"),@LIST("HSP_Average","HSP_Ending","HSP_Historical")),@REMOVE(@RELATIVE("HSP_Rates",0),@LIST("HSP_InputValue","HSP_InputCurrency")))
FIX("A @ LY A",&CurYear)

"Entity" (

IF (@ISUDA("Account","Average"))
 "BegBalance" = @SHIFT("BegBalance" -> "HSP_Average" -> "A", -1, @RELATIVE("Year",0));
 "Jul" = @SHIFT("Jul" -> "HSP_Average" -> "A", -1, @RELATIVE("Year",0));
 "Aug" = @SHIFT("Aug" -> "HSP_Average" -> "A", -1, @RELATIVE("Year",0));
 "Sep" = @SHIFT("Sep" -> "HSP_Average" -> "A", -1, @RELATIVE("Year",0));
 "Oct" = @SHIFT("Oct" -> "HSP_Average" -> "A", -1, @RELATIVE("Year",0));
 "Nov" = @SHIFT("Nov" -> "HSP_Average" -> "A", -1, @RELATIVE("Year",0));
 "Dec" = @SHIFT("Dec" -> "HSP_Average" -> "A", -1, @RELATIVE("Year",0));
 "Jan" = @SHIFT("Jan" -> "HSP_Average" -> "A", -1, @RELATIVE("Year",0));
 "Feb" = @SHIFT("Feb" -> "HSP_Average" -> "A", -1, @RELATIVE("Year",0));
 "Mar" = @SHIFT("Mar" -> "HSP_Average" -> "A", -1, @RELATIVE("Year",0));
 "Apr" = @SHIFT("Apr" -> "HSP_Average" -> "A", -1, @RELATIVE("Year",0));
 "May" = @SHIFT("May" -> "HSP_Average" -> "A", -1, @RELATIVE("Year",0));
 "Jun" = @SHIFT("Jun" -> "HSP_Average" -> "A", -1, @RELATIVE("Year",0));
ELSEIF (@ISUDA("Account","Ending"))
 "BegBalance" = @SHIFT("BegBalance" -> "HSP_Ending" -> "A", -1, @RELATIVE("Year",0));
 "Jul" = @SHIFT("Jul" -> "HSP_Ending" -> "A", -1, @RELATIVE("Year",0));
 "Aug" = @SHIFT("Aug" -> "HSP_Ending" -> "A", -1, @RELATIVE("Year",0));
 "Sep" = @SHIFT("Sep" -> "HSP_Ending" -> "A", -1, @RELATIVE("Year",0));
 "Oct" = @SHIFT("Oct" -> "HSP_Ending" -> "A", -1, @RELATIVE("Year",0));
 "Nov" = @SHIFT("Nov" -> "HSP_Ending" -> "A", -1, @RELATIVE("Year",0));
 "Dec" = @SHIFT("Dec" -> "HSP_Ending" -> "A", -1, @RELATIVE("Year",0));
 "Jan" = @SHIFT("Jan" -> "HSP_Ending" -> "A", -1, @RELATIVE("Year",0));
 "Feb" = @SHIFT("Feb" -> "HSP_Ending" -> "A", -1, @RELATIVE("Year",0));
 "Mar" = @SHIFT("Mar" -> "HSP_Ending" -> "A", -1, @RELATIVE("Year",0));
 "Apr" = @SHIFT("Apr" -> "HSP_Ending" -> "A", -1, @RELATIVE("Year",0));
 "May" = @SHIFT("May" -> "HSP_Ending" -> "A", -1, @RELATIVE("Year",0));
 "Jun" = @SHIFT("Jun" -> "HSP_Ending" -> "A", -1, @RELATIVE("Year",0));
ELSEIF (@ISUDA("Account","No Rate"))
 "BegBalance" = 1;
 "Jul" = 1;
 "Aug" = 1;
 "Sep" = 1;
 "Oct" = 1;
 "Nov" = 1;
 "Dec" = 1;
 "Jan" = 1;
 "Feb" = 1;
 "Mar" = 1;
 "Apr" = 1;
 "May" = 1;
 "Jun" = 1;
ENDIF
)

ENDFIX 
ENDFIX 
ENDFIX 

FIX("Version","Currency","Brand","Data","Department","Region","Channel")
FIX(@REMOVE(@DESCENDANTS("Account"),@LIST("HSP_Average","HSP_Ending","HSP_Historical")),@REMOVE(@RELATIVE("HSP_Rates",0),@LIST("HSP_InputValue","HSP_InputCurrency")))
FIX("A @ CY B",&CurYear)

"Entity" (

IF (@ISUDA("Account","Average"))
 "BegBalance" = "BegBalance" -> "HSP_Average" -> &CurYear -> "B";
 "Jul" = "Jul" -> "HSP_Average" -> &CurYear -> "B";
 "Aug" = "Aug" -> "HSP_Average" -> &CurYear -> "B";
 "Sep" = "Sep" -> "HSP_Average" -> &CurYear -> "B";
 "Oct" = "Oct" -> "HSP_Average" -> &CurYear -> "B";
 "Nov" = "Nov" -> "HSP_Average" -> &CurYear -> "B";
 "Dec" = "Dec" -> "HSP_Average" -> &CurYear -> "B";
 "Jan" = "Jan" -> "HSP_Average" -> &CurYear -> "B";
 "Feb" = "Feb" -> "HSP_Average" -> &CurYear -> "B";
 "Mar" = "Mar" -> "HSP_Average" -> &CurYear -> "B";
 "Apr" = "Apr" -> "HSP_Average" -> &CurYear -> "B";
 "May" = "May" -> "HSP_Average" -> &CurYear -> "B";
 "Jun" = "Jun" -> "HSP_Average" -> &CurYear -> "B";
ELSEIF (@ISUDA("Account","Ending"))
 "BegBalance" = "BegBalance" -> "HSP_Ending" -> &CurYear -> "B";
 "Jul" = "Jul" -> "HSP_Ending" -> &CurYear -> "B";
 "Aug" = "Aug" -> "HSP_Ending" -> &CurYear -> "B";
 "Sep" = "Sep" -> "HSP_Ending" -> &CurYear -> "B";
 "Oct" = "Oct" -> "HSP_Ending" -> &CurYear -> "B";
 "Nov" = "Nov" -> "HSP_Ending" -> &CurYear -> "B";
 "Dec" = "Dec" -> "HSP_Ending" -> &CurYear -> "B";
 "Jan" = "Jan" -> "HSP_Ending" -> &CurYear -> "B";
 "Feb" = "Feb" -> "HSP_Ending" -> &CurYear -> "B";
 "Mar" = "Mar" -> "HSP_Ending" -> &CurYear -> "B";
 "Apr" = "Apr" -> "HSP_Ending" -> &CurYear -> "B";
 "May" = "May" -> "HSP_Ending" -> &CurYear -> "B";
 "Jun" = "Jun" -> "HSP_Ending" -> &CurYear -> "B";
ELSEIF (@ISUDA("Account","No Rate"))
 "BegBalance" = 1;
 "Jul" = 1;
 "Aug" = 1;
 "Sep" = 1;
 "Oct" = 1;
 "Nov" = 1;
 "Dec" = 1;
 "Jan" = 1;
 "Feb" = 1;
 "Mar" = 1;
 "Apr" = 1;
 "May" = 1;
 "Jun" = 1;
ENDIF
)

ENDFIX 
ENDFIX 
ENDFIX 

FIX("Version","Currency","Brand","Data","Department","Region","Channel")
FIX(@REMOVE(@DESCENDANTS("Account"),@LIST("HSP_Average","HSP_Ending","HSP_Historical")),@REMOVE(@RELATIVE("HSP_Rates",0),@LIST("HSP_InputValue","HSP_InputCurrency")))
FIX("A @ NY B",&CurYear)

"Entity" (

IF (@ISUDA("Account","Average"))
 "BegBalance" = @SHIFT("BegBalance" -> "HSP_Average" -> "B", 1, @RELATIVE("Year",0));
 "Jul" = @SHIFT("Jul" -> "HSP_Average" -> "B", 1, @RELATIVE("Year",0));
 "Aug" = @SHIFT("Aug" -> "HSP_Average" -> "B", 1, @RELATIVE("Year",0));
 "Sep" = @SHIFT("Sep" -> "HSP_Average" -> "B", 1, @RELATIVE("Year",0));
 "Oct" = @SHIFT("Oct" -> "HSP_Average" -> "B", 1, @RELATIVE("Year",0));
 "Nov" = @SHIFT("Nov" -> "HSP_Average" -> "B", 1, @RELATIVE("Year",0));
 "Dec" = @SHIFT("Dec" -> "HSP_Average" -> "B", 1, @RELATIVE("Year",0));
 "Jan" = @SHIFT("Jan" -> "HSP_Average" -> "B", 1, @RELATIVE("Year",0));
 "Feb" = @SHIFT("Feb" -> "HSP_Average" -> "B", 1, @RELATIVE("Year",0));
 "Mar" = @SHIFT("Mar" -> "HSP_Average" -> "B", 1, @RELATIVE("Year",0));
 "Apr" = @SHIFT("Apr" -> "HSP_Average" -> "B", 1, @RELATIVE("Year",0));
 "May" = @SHIFT("May" -> "HSP_Average" -> "B", 1, @RELATIVE("Year",0));
 "Jun" = @SHIFT("Jun" -> "HSP_Average" -> "B", 1, @RELATIVE("Year",0));
ELSEIF (@ISUDA("Account","Ending"))
 "BegBalance" = @SHIFT("BegBalance" -> "HSP_Ending" -> "B", 1, @RELATIVE("Year",0));
 "Jul" = @SHIFT("Jul" -> "HSP_Ending" -> "B", 1, @RELATIVE("Year",0));
 "Aug" = @SHIFT("Aug" -> "HSP_Ending" -> "B", 1, @RELATIVE("Year",0));
 "Sep" = @SHIFT("Sep" -> "HSP_Ending" -> "B", 1, @RELATIVE("Year",0));
 "Oct" = @SHIFT("Oct" -> "HSP_Ending" -> "B", 1, @RELATIVE("Year",0));
 "Nov" = @SHIFT("Nov" -> "HSP_Ending" -> "B", 1, @RELATIVE("Year",0));
 "Dec" = @SHIFT("Dec" -> "HSP_Ending" -> "B", 1, @RELATIVE("Year",0));
 "Jan" = @SHIFT("Jan" -> "HSP_Ending" -> "B", 1, @RELATIVE("Year",0));
 "Feb" = @SHIFT("Feb" -> "HSP_Ending" -> "B", 1, @RELATIVE("Year",0));
 "Mar" = @SHIFT("Mar" -> "HSP_Ending" -> "B", 1, @RELATIVE("Year",0));
 "Apr" = @SHIFT("Apr" -> "HSP_Ending" -> "B", 1, @RELATIVE("Year",0));
 "May" = @SHIFT("May" -> "HSP_Ending" -> "B", 1, @RELATIVE("Year",0));
 "Jun" = @SHIFT("Jun" -> "HSP_Ending" -> "B", 1, @RELATIVE("Year",0));
ELSEIF (@ISUDA("Account","No Rate"))
 "BegBalance" = 1;
 "Jul" = 1;
 "Aug" = 1;
 "Sep" = 1;
 "Oct" = 1;
 "Nov" = 1;
 "Dec" = 1;
 "Jan" = 1;
 "Feb" = 1;
 "Mar" = 1;
 "Apr" = 1;
 "May" = 1;
 "Jun" = 1;
ENDIF
)

ENDFIX 
ENDFIX 
ENDFIX 


/* Copy data for calculations */
FIX(@RELATIVE("YearTotal",0))
FIX("HV9L",@RELATIVE("P&L",0))
FIX(@RELATIVE("Total_Channel",0))
FIX(@RELATIVE("Total_Entity",0))
FIX(@RELATIVE("Total_Region",0))
FIX("No_Department")
FIX("Int","Int_YTD","IntAdj","IntAdj_YTD","ExtAdj","ExtAdj_YTD")
FIX(@RELATIVE("SKU_Group",0),@RELATIVE("SubBrand_Group",0), "No_Brand", "No_Brand_VS")
FIX("Local","EUR","CNY")
FIX("HSP_InputValue")
FIX(&CurYear)
FIX("Master")

CLEARDATA "A @ CY B";
DATACOPY "A" TO "A @ LY A";
DATACOPY "A" TO "A @ CY B";
DATACOPY "A" TO "A @ NY B";
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

/* ****************************************************************************************** */
/* *********************************** Restate P&L ************************************** */
/* ***************************************************************************************** */

/* Re-state Gross Sales and A&D for PRHK DF and PRHK Interco */
FIX(@RELATIVE("YearTotal",0))
FIX(@RELATIVE("Total_Channel",0))
FIX("324")
FIX("IC","02DF")
FIX("No_Department")
FIX("Int_YTD","IntAdj_YTD","ExtAdj_YTD")
FIX(@RELATIVE("SKU_Group",0),@RELATIVE("SubBrand_Group",0), "No_Brand", "No_Brand_VS")
FIX("Local")
FIX("HSP_InputValue")
FIX(&CurYear)
FIX("A @ LY A", "A @ CY B", "A @ NY B")
FIX("Master")

/* Re-state Gross Sales based on Input Currency */
"3010.0000GS_USD" = "3010.0000GS_USD" / "3010.0000GS_USD" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_USD" * "3010.0000GS_USD" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_USD" -> "A" * "3010.0000GS_USD" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_HKD" / "3010.0000GS_USD" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_HKD" -> "A";

/* Re-state Allowance and Discount based on Input Currency */
"5235.020000_USD" = "5235.020000_USD" / "5235.020000_USD" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_USD" * "5235.020000_USD" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_USD" -> "A" * "5235.020000_USD" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_HKD" / "5235.020000_USD" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_HKD" -> "A";

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

/* Re-state Gross Sales and A&D for PRHK DF and PRHK Interco */
FIX(@RELATIVE("YearTotal",0))
FIX(@RELATIVE("Total_Channel",0))
FIX("384")
FIX("02MG")
FIX("No_Department")
FIX("Int_YTD","IntAdj_YTD","ExtAdj_YTD")
FIX(@RELATIVE("SKU_Group",0),@RELATIVE("SubBrand_Group",0), "No_Brand", "No_Brand_VS")
FIX("Local")
FIX("HSP_InputValue")
FIX(&CurYear)
FIX("A @ LY A", "A @ CY B", "A @ NY B")
FIX("Master")

/* Re-state Gross Sales based on Input Currency */
"3010.0000GS_USD" = "3010.0000GS_USD" / "3010.0000GS_USD" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_USD" * "3010.0000GS_USD" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_USD" -> "A" * "3010.0000GS_USD" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_HKD" / "3010.0000GS_USD" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_HKD" -> "A";

/* Re-state Allowance and Discount based on Input Currency */
"5235.020000_USD" = "5235.020000_USD" / "5235.020000_USD" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_USD" * "5235.020000_USD" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_USD" -> "A" * "5235.020000_USD" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_HKD" / "5235.020000_USD" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_HKD" -> "A";

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

/* Re-state T&D for PRC Ltd. and PRCSW */
FIX(@RELATIVE("YearTotal",0))
FIX(@RELATIVE("Total_Channel",0))
FIX("391", "398")
FIX(@RELATIVE("Total_Region",0))
FIX("No_Department")
FIX("Int_YTD","IntAdj_YTD","ExtAdj_YTD")
FIX(@RELATIVE("SKU_Group",0),@RELATIVE("SubBrand_Group",0), "No_Brand", "No_Brand_VS")
FIX("Local")
FIX("HSP_InputValue")
FIX(&CurYear)
FIX("A @ LY A", "A @ CY B", "A @ NY B")
FIX("Master")

"4011.DUT000_USD" = "4011.DUT000_USD" / "4011.DUT000_USD" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_USD" * "4011.DUT000_USD" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_USD" -> "A" * "4011.DUT000_USD" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_CNY" / "4011.DUT000_USD" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_CNY" -> "A";
"4011.DUT000_EUR" = "4011.DUT000_EUR" / "4011.DUT000_EUR" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_EUR" * "4011.DUT000_EUR" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_EUR" -> "A" * "4011.DUT000_EUR" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_CNY" / "4011.DUT000_EUR" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_CNY" -> "A";

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

/* Re-state for all entities and regions */
FIX(@RELATIVE("YearTotal",0))
FIX(@RELATIVE("Total_Channel",0))
FIX(@RELATIVE("Total_Entity",0))
FIX(@RELATIVE("Total_Region",0))
FIX("No_Department")
FIX("Int_YTD","IntAdj_YTD","ExtAdj_YTD")
FIX(@RELATIVE("SKU_Group",0),@RELATIVE("SubBrand_Group",0), "No_Brand", "No_Brand_VS")
FIX("Local")
FIX("HSP_InputValue")
FIX(&CurYear)
FIX("A @ LY A", "A @ CY B", "A @ NY B")
FIX("Master")

/* Re-state FX on Standard Costs based on Input Currency */
"HFXSTDC_EUR"(

IF(@ISUDA(Entity,"CNY"))
"HFXSTDC_EUR" = (("HSTDC_EUR" -> "A" + "HFXSTDC_EUR" -> "A") / "HSTDC_EUR" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_EUR" * "HSTDC_EUR" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_EUR" -> "A" * "HSTDC_EUR" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_CNY" / "HSTDC_EUR" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_CNY" -> "A" - "HSTDC_EUR" -> "A");
"HFXSTDC_ZAR" = (("HSTDC_ZAR" -> "A" + "HFXSTDC_ZAR" -> "A") / "HSTDC_ZAR" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_ZAR" * "HSTDC_ZAR" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_ZAR" -> "A" * "HSTDC_ZAR" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_CNY" / "HSTDC_ZAR" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_CNY" -> "A" - "HSTDC_ZAR" -> "A");
"HFXSTDC_ARS" = (("HSTDC_ARS" -> "A" + "HFXSTDC_ARS" -> "A") / "HSTDC_ARS" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_ARS" * "HSTDC_ARS" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_ARS" -> "A" * "HSTDC_ARS" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_CNY" / "HSTDC_ARS" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_CNY" -> "A" - "HSTDC_ARS" -> "A");
"HFXSTDC_AUD" = (("HSTDC_AUD" -> "A" + "HFXSTDC_AUD" -> "A") / "HSTDC_AUD" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_AUD" * "HSTDC_AUD" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_AUD" -> "A" * "HSTDC_AUD" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_CNY" / "HSTDC_AUD" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_CNY" -> "A" - "HSTDC_AUD" -> "A");
"HFXSTDC_BRL" = (("HSTDC_BRL" -> "A" + "HFXSTDC_BRL" -> "A") / "HSTDC_BRL" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_BRL" * "HSTDC_BRL" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_BRL" -> "A" * "HSTDC_BRL" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_CNY" / "HSTDC_BRL" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_CNY" -> "A" - "HSTDC_BRL" -> "A");
"HFXSTDC_CAD" = (("HSTDC_CAD" -> "A" + "HFXSTDC_CAD" -> "A") / "HSTDC_CAD" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_CAD" * "HSTDC_CAD" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_CAD" -> "A" * "HSTDC_CAD" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_CNY" / "HSTDC_CAD" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_CNY" -> "A" - "HSTDC_CAD" -> "A");
"HFXSTDC_CNY" = (("HSTDC_CNY" -> "A" + "HFXSTDC_CNY" -> "A")  - "HSTDC_CNY" -> "A");
"HFXSTDC_COP" = (("HSTDC_COP" -> "A" + "HFXSTDC_COP" -> "A") / "HSTDC_COP" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_COP" * "HSTDC_COP" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_COP" -> "A" * "HSTDC_COP" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_CNY" / "HSTDC_COP" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_CNY" -> "A" - "HSTDC_COP" -> "A");
"HFXSTDC_KRW" = (("HSTDC_KRW" -> "A" + "HFXSTDC_KRW" -> "A") / "HSTDC_KRW" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_KRW" * "HSTDC_KRW" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_KRW" -> "A" * "HSTDC_KRW" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_CNY" / "HSTDC_KRW" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_CNY" -> "A" - "HSTDC_KRW" -> "A");
"HFXSTDC_DKK" = (("HSTDC_DKK" -> "A" + "HFXSTDC_DKK" -> "A") / "HSTDC_DKK" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_DKK" * "HSTDC_DKK" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_DKK" -> "A" * "HSTDC_DKK" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_CNY" / "HSTDC_DKK" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_CNY" -> "A" - "HSTDC_DKK" -> "A");
"HFXSTDC_EEK" = (("HSTDC_EEK" -> "A" + "HFXSTDC_EEK" -> "A") / "HSTDC_EEK" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_EEK" * "HSTDC_EEK" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_EEK" -> "A" * "HSTDC_EEK" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_CNY" / "HSTDC_EEK" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_CNY" -> "A" - "HSTDC_EEK" -> "A");
"HFXSTDC_USD" = (("HSTDC_USD" -> "A" + "HFXSTDC_USD" -> "A") / "HSTDC_USD" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_USD" * "HSTDC_USD" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_USD" -> "A" * "HSTDC_USD" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_CNY" / "HSTDC_USD" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_CNY" -> "A" - "HSTDC_USD" -> "A");
"HFXSTDC_GBP" = (("HSTDC_GBP" -> "A" + "HFXSTDC_GBP" -> "A") / "HSTDC_GBP" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_GBP" * "HSTDC_GBP" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_GBP" -> "A" * "HSTDC_GBP" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_CNY" / "HSTDC_GBP" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_CNY" -> "A" - "HSTDC_GBP" -> "A");
"HFXSTDC_NZD" = (("HSTDC_NZD" -> "A" + "HFXSTDC_NZD" -> "A") / "HSTDC_NZD" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_NZD" * "HSTDC_NZD" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_NZD" -> "A" * "HSTDC_NZD" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_CNY" / "HSTDC_NZD" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_CNY" -> "A" - "HSTDC_NZD" -> "A");
"HFXSTDC_HKD" = (("HSTDC_HKD" -> "A" + "HFXSTDC_HKD" -> "A") / "HSTDC_HKD" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_HKD" * "HSTDC_HKD" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_HKD" -> "A" * "HSTDC_HKD" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_CNY" / "HSTDC_HKD" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_CNY" -> "A" - "HSTDC_HKD" -> "A");
"HFXSTDC_MXN" = (("HSTDC_MXN" -> "A" + "HFXSTDC_MXN" -> "A") / "HSTDC_MXN" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_MXN" * "HSTDC_MXN" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_MXN" -> "A" * "HSTDC_MXN" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_CNY" / "HSTDC_MXN" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_CNY" -> "A" - "HSTDC_MXN" -> "A");
"HFXSTDC_PLN" = (("HSTDC_PLN" -> "A" + "HFXSTDC_PLN" -> "A") / "HSTDC_PLN" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_PLN" * "HSTDC_PLN" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_PLN" -> "A" * "HSTDC_PLN" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_CNY" / "HSTDC_PLN" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_CNY" -> "A" - "HSTDC_PLN" -> "A");
"HFXSTDC_SEK" = (("HSTDC_SEK" -> "A" + "HFXSTDC_SEK" -> "A") / "HSTDC_SEK" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_SEK" * "HSTDC_SEK" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_SEK" -> "A" * "HSTDC_SEK" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_CNY" / "HSTDC_SEK" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_CNY" -> "A" - "HSTDC_SEK" -> "A");

ELSEIF(@ISUDA(Entity,"HKD"))
"HFXSTDC_EUR" = (("HSTDC_EUR" -> "A" + "HFXSTDC_EUR" -> "A") / "HSTDC_EUR" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_EUR" * "HSTDC_EUR" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_EUR" -> "A" * "HSTDC_EUR" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_HKD" / "HSTDC_EUR" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_HKD" -> "A" - "HSTDC_EUR" -> "A");
"HFXSTDC_ZAR" = (("HSTDC_ZAR" -> "A" + "HFXSTDC_ZAR" -> "A") / "HSTDC_ZAR" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_ZAR" * "HSTDC_ZAR" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_ZAR" -> "A" * "HSTDC_ZAR" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_HKD" / "HSTDC_ZAR" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_HKD" -> "A" - "HSTDC_ZAR" -> "A");
"HFXSTDC_ARS" = (("HSTDC_ARS" -> "A" + "HFXSTDC_ARS" -> "A") / "HSTDC_ARS" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_ARS" * "HSTDC_ARS" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_ARS" -> "A" * "HSTDC_ARS" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_HKD" / "HSTDC_ARS" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_HKD" -> "A" - "HSTDC_ARS" -> "A");
"HFXSTDC_AUD" = (("HSTDC_AUD" -> "A" + "HFXSTDC_AUD" -> "A") / "HSTDC_AUD" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_AUD" * "HSTDC_AUD" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_AUD" -> "A" * "HSTDC_AUD" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_HKD" / "HSTDC_AUD" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_HKD" -> "A" - "HSTDC_AUD" -> "A");
"HFXSTDC_BRL" = (("HSTDC_BRL" -> "A" + "HFXSTDC_BRL" -> "A") / "HSTDC_BRL" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_BRL" * "HSTDC_BRL" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_BRL" -> "A" * "HSTDC_BRL" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_HKD" / "HSTDC_BRL" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_HKD" -> "A" - "HSTDC_BRL" -> "A");
"HFXSTDC_CAD" = (("HSTDC_CAD" -> "A" + "HFXSTDC_CAD" -> "A") / "HSTDC_CAD" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_CAD" * "HSTDC_CAD" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_CAD" -> "A" * "HSTDC_CAD" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_HKD" / "HSTDC_CAD" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_HKD" -> "A" - "HSTDC_CAD" -> "A");
"HFXSTDC_CNY" = (("HSTDC_CNY" -> "A" + "HFXSTDC_CNY" -> "A") / "HSTDC_CNY" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_CNY" * "HSTDC_CNY" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_CNY" -> "A" * "HSTDC_CNY" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_HKD" / "HSTDC_CNY" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_HKD" -> "A" - "HSTDC_CNY" -> "A");
"HFXSTDC_COP" = (("HSTDC_COP" -> "A" + "HFXSTDC_COP" -> "A") / "HSTDC_COP" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_COP" * "HSTDC_COP" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_COP" -> "A" * "HSTDC_COP" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_HKD" / "HSTDC_COP" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_HKD" -> "A" - "HSTDC_COP" -> "A");
"HFXSTDC_KRW" = (("HSTDC_KRW" -> "A" + "HFXSTDC_KRW" -> "A") / "HSTDC_KRW" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_KRW" * "HSTDC_KRW" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_KRW" -> "A" * "HSTDC_KRW" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_HKD" / "HSTDC_KRW" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_HKD" -> "A" - "HSTDC_KRW" -> "A");
"HFXSTDC_DKK" = (("HSTDC_DKK" -> "A" + "HFXSTDC_DKK" -> "A") / "HSTDC_DKK" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_DKK" * "HSTDC_DKK" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_DKK" -> "A" * "HSTDC_DKK" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_HKD" / "HSTDC_DKK" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_HKD" -> "A" - "HSTDC_DKK" -> "A");
"HFXSTDC_EEK" = (("HSTDC_EEK" -> "A" + "HFXSTDC_EEK" -> "A") / "HSTDC_EEK" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_EEK" * "HSTDC_EEK" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_EEK" -> "A" * "HSTDC_EEK" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_HKD" / "HSTDC_EEK" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_HKD" -> "A" - "HSTDC_EEK" -> "A");
"HFXSTDC_USD" = (("HSTDC_USD" -> "A" + "HFXSTDC_USD" -> "A") / "HSTDC_USD" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_USD" * "HSTDC_USD" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_USD" -> "A" * "HSTDC_USD" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_HKD" / "HSTDC_USD" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_HKD" -> "A" - "HSTDC_USD" -> "A");
"HFXSTDC_GBP" = (("HSTDC_GBP" -> "A" + "HFXSTDC_GBP" -> "A") / "HSTDC_GBP" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_GBP" * "HSTDC_GBP" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_GBP" -> "A" * "HSTDC_GBP" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_HKD" / "HSTDC_GBP" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_HKD" -> "A" - "HSTDC_GBP" -> "A");
"HFXSTDC_NZD" = (("HSTDC_NZD" -> "A" + "HFXSTDC_NZD" -> "A") / "HSTDC_NZD" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_NZD" * "HSTDC_NZD" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_NZD" -> "A" * "HSTDC_NZD" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_HKD" / "HSTDC_NZD" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_HKD" -> "A" - "HSTDC_NZD" -> "A");
"HFXSTDC_HKD" = (("HSTDC_HKD" -> "A" + "HFXSTDC_HKD" -> "A") - "HSTDC_HKD" -> "A");
"HFXSTDC_MXN" = (("HSTDC_MXN" -> "A" + "HFXSTDC_MXN" -> "A") / "HSTDC_MXN" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_MXN" * "HSTDC_MXN" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_MXN" -> "A" * "HSTDC_MXN" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_HKD" / "HSTDC_MXN" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_HKD" -> "A" - "HSTDC_MXN" -> "A");
"HFXSTDC_PLN" = (("HSTDC_PLN" -> "A" + "HFXSTDC_PLN" -> "A") / "HSTDC_PLN" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_PLN" * "HSTDC_PLN" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_PLN" -> "A" * "HSTDC_PLN" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_HKD" / "HSTDC_PLN" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_HKD" -> "A" - "HSTDC_PLN" -> "A");
"HFXSTDC_SEK" = (("HSTDC_SEK" -> "A" + "HFXSTDC_SEK" -> "A") / "HSTDC_SEK" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_SEK" * "HSTDC_SEK" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_SEK" -> "A" * "HSTDC_SEK" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_HKD" / "HSTDC_SEK" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_HKD" -> "A" - "HSTDC_SEK" -> "A");

ENDIF
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


/* ***************************************************************************************** */
/* ****************************** For Currency Conversion *************************** */
/* ***************************************************************************************** */
/* Copy data for calculations */
FIX(@RELATIVE("YearTotal",0))
FIX("HV9L",@RELATIVE("P&L",0))
FIX(@RELATIVE("Total_Channel",0))
FIX(@RELATIVE("Total_Entity",0))
FIX(@RELATIVE("Total_Region",0))
FIX("No_Department")
FIX("Int_YTD","IntAdj_YTD","ExtAdj_YTD")
FIX(@RELATIVE("SKU_Group",0),@RELATIVE("SubBrand_Group",0), "No_Brand", "No_Brand_VS")
FIX("HSP_InputValue")
FIX(&CurYear)
FIX("A @ LY A", "A @ CY B", "A @ NY B")
FIX("Master")
DATACOPY "Local" TO "CNY";
DATACOPY "Local" TO "EUR";
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

FIX("HV9L",@RELATIVE("P&L",0))
FIX(@RELATIVE("Total_Channel",0))
FIX(@RELATIVE("Total_Entity",0))
FIX(@RELATIVE("Total_Region",0))
FIX("No_Department")
FIX("Int_YTD","IntAdj_YTD","ExtAdj_YTD")
FIX(@RELATIVE("SKU_Group",0),@RELATIVE("SubBrand_Group",0), "No_Brand", "No_Brand_VS")
FIX("CNY","EUR")
FIX("HSP_InputValue")
FIX(&CurYear)
FIX("A @ LY A", "A @ CY B", "A @ NY B")
FIX("Master")

"Jul"(
/* Convert P&L Items from CNY to EUR */
IF(@ISUDA(Entity,"CNY") AND @ISMBR("EUR"))
"Jul"="Jul" -> "Local" *"Jul" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_EUR" / "Jul" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_CNY";
"Aug"="Aug" -> "Local" *"Aug" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_EUR" / "Aug" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_CNY";
"Sep"="Sep" -> "Local" *"Sep" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_EUR" / "Sep" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_CNY";
"Oct"="Oct" -> "Local" *"Oct" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_EUR" / "Oct" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_CNY";
"Nov"="Nov" -> "Local" *"Nov" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_EUR" / "Nov" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_CNY";
"Dec"="Dec" -> "Local" *"Dec" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_EUR" / "Dec" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_CNY";
"Jan"="Jan" -> "Local" *"Jan" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_EUR" / "Jan" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_CNY";
"Feb"="Feb" -> "Local" *"Feb" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_EUR" / "Feb" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_CNY";
"Mar"="Mar" -> "Local" *"Mar" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_EUR" / "Mar" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_CNY";
"Apr"="Apr" -> "Local" *"Apr" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_EUR" / "Apr" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_CNY";
"May"="May" -> "Local" *"May" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_EUR" / "May" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_CNY";
"Jun"="Jun" -> "Local" *"Jun" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_EUR" / "Jun" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_CNY";

/* Convert P&L Items from HKD to EUR */
ELSEIF(@ISUDA(Entity,"HKD") AND @ISMBR("EUR"))
"Jul"="Jul" -> "Local" *"Jul" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_EUR" / "Jul" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_HKD";
"Aug"="Aug" -> "Local" *"Aug" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_EUR" / "Aug" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_HKD";
"Sep"="Sep" -> "Local" *"Sep" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_EUR" / "Sep" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_HKD";
"Oct"="Oct" -> "Local" *"Oct" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_EUR" / "Oct" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_HKD";
"Nov"="Nov" -> "Local" *"Nov" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_EUR" / "Nov" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_HKD";
"Dec"="Dec" -> "Local" *"Dec" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_EUR" / "Dec" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_HKD";
"Jan"="Jan" -> "Local" *"Jan" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_EUR" / "Jan" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_HKD";
"Feb"="Feb" -> "Local" *"Feb" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_EUR" / "Feb" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_HKD";
"Mar"="Mar" -> "Local" *"Mar" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_EUR" / "Mar" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_HKD";
"Apr"="Apr" -> "Local" *"Apr" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_EUR" / "Apr" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_HKD";
"May"="May" -> "Local" *"May" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_EUR" / "May" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_HKD";
"Jun"="Jun" -> "Local" *"Jun" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_EUR" / "Jun" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_HKD";

ENDIF

/* Convert P&L Items from HKD to CNY */
IF(@ISUDA(Entity,"HKD") AND @ISMBR("CNY"))
"Jul"="Jul" -> "Local" *"Jul" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_CNY" / "Jul" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_HKD";
"Aug"="Aug" -> "Local" *"Aug" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_CNY" / "Aug" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_HKD";
"Sep"="Sep" -> "Local" *"Sep" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_CNY" / "Sep" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_HKD";
"Oct"="Oct" -> "Local" *"Oct" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_CNY" / "Oct" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_HKD";
"Nov"="Nov" -> "Local" *"Nov" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_CNY" / "Nov" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_HKD";
"Dec"="Dec" -> "Local" *"Dec" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_CNY" / "Dec" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_HKD";
"Jan"="Jan" -> "Local" *"Jan" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_CNY" / "Jan" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_HKD";
"Feb"="Feb" -> "Local" *"Feb" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_CNY" / "Feb" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_HKD";
"Mar"="Mar" -> "Local" *"Mar" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_CNY" / "Mar" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_HKD";
"Apr"="Apr" -> "Local" *"Apr" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_CNY" / "Apr" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_HKD";
"May"="May" -> "Local" *"May" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_CNY" / "May" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_HKD";
"Jun"="Jun" -> "Local" *"Jun" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_CNY" / "Jun" -> "Version" -> "Currency" -> "Entity" -> "Channel" -> "Brand" -> "Data" -> "Department" -> "Region" -> "HSP_Rate_HKD";

/* Convert P&L Items from CNY to CNY */
ELSEIF(@ISUDA(Entity,"CNY") AND @ISMBR("CNY"))

 "Local";

ENDIF
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


/* ***************************************************************************************** */
/* ****************************** For MTD Conversion ********************************* */
/* ***************************************************************************************** */
FIX("HV9L",@RELATIVE("P&L",0))
FIX(@RELATIVE("Total_Channel",0))
FIX(@RELATIVE("Total_Entity",0))
FIX(@RELATIVE("Total_Region",0))
FIX("No_Department")
FIX(@RELATIVE("SKU_Group",0),@RELATIVE("SubBrand_Group",0), "No_Brand", "No_Brand_VS")
FIX("Local","CNY","EUR")
FIX("HSP_InputValue")
FIX(&CurYear)
FIX("A @ LY A", "A @ CY B", "A @ NY B")
FIX("Master")

FIX("Int")
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
ENDFIX

FIX("IntAdj")
"Jul" = "Jul" -> "IntAdj_YTD"; 
"Aug" = "Aug" -> "IntAdj_YTD" - "Jul" -> "IntAdj_YTD"; 
"Sep" = "Sep" -> "IntAdj_YTD" - "Aug" -> "IntAdj_YTD";
"Oct" = "Oct" -> "IntAdj_YTD" - "Sep" -> "IntAdj_YTD"; 
"Nov" = "Nov" -> "IntAdj_YTD" - "Oct" -> "IntAdj_YTD";
"Dec" = "Dec" -> "IntAdj_YTD" - "Nov" -> "IntAdj_YTD";
"Jan" = "Jan" -> "IntAdj_YTD" - "Dec" -> "IntAdj_YTD";
"Feb" = "Feb" -> "IntAdj_YTD" - "Jan" -> "IntAdj_YTD";
"Mar" = "Mar" -> "IntAdj_YTD" - "Feb" -> "IntAdj_YTD";
"Apr" = "Apr" -> "IntAdj_YTD" - "Mar" -> "IntAdj_YTD";
"May" = "May" -> "IntAdj_YTD" - "Apr" -> "IntAdj_YTD";
"Jun" = "Jun" -> "IntAdj_YTD" - "May" -> "IntAdj_YTD";
ENDFIX

FIX("ExtAdj")
"Jul" = "Jul" -> "ExtAdj_YTD"; 
"Aug" = "Aug" -> "ExtAdj_YTD" - "Jul" -> "ExtAdj_YTD"; 
"Sep" = "Sep" -> "ExtAdj_YTD" - "Aug" -> "ExtAdj_YTD";
"Oct" = "Oct" -> "ExtAdj_YTD" - "Sep" -> "ExtAdj_YTD"; 
"Nov" = "Nov" -> "ExtAdj_YTD" - "Oct" -> "ExtAdj_YTD";
"Dec" = "Dec" -> "ExtAdj_YTD" - "Nov" -> "ExtAdj_YTD";
"Jan" = "Jan" -> "ExtAdj_YTD" - "Dec" -> "ExtAdj_YTD";
"Feb" = "Feb" -> "ExtAdj_YTD" - "Jan" -> "ExtAdj_YTD";
"Mar" = "Mar" -> "ExtAdj_YTD" - "Feb" -> "ExtAdj_YTD";
"Apr" = "Apr" -> "ExtAdj_YTD" - "Mar" -> "ExtAdj_YTD";
"May" = "May" -> "ExtAdj_YTD" - "Apr" -> "ExtAdj_YTD";
"Jun" = "Jun" -> "ExtAdj_YTD" - "May" -> "ExtAdj_YTD";
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

/* Clear MTD data beyond DataLoadMth */
FIX("HV9L",@RELATIVE("P&L",0))
FIX(@RELATIVE("Total_Channel",0))
FIX(@RELATIVE("Total_Entity",0))
FIX(@RELATIVE("Total_Region",0))
FIX("No_Department")
FIX(@RELATIVE("SKU_Group",0),@RELATIVE("SubBrand_Group",0), "No_Brand", "No_Brand_VS")
FIX("Local","CNY","EUR")
FIX("HSP_InputValue")
FIX(&CurYear)
FIX("A @ LY A", "A @ CY B", "A @ NY B")
FIX("Master")
FIX("Int", "IntAdj", "ExtAdj")

"Aug"(
IF(@JEQUALSIGNORECASE(@NAME(&DataLoadMth),@NAME("Jul")))
"Aug" = #Missing;
"Sep" = #Missing;
"Oct" = #Missing;
"Nov" = #Missing;
"Dec" = #Missing;
"Jan" = #Missing;
"Feb" = #Missing;
"Mar" = #Missing;
"Apr" = #Missing;
"May" = #Missing;
"Jun" = #Missing;

ELSEIF(@JEQUALSIGNORECASE(@NAME(&DataLoadMth),@NAME("Aug")))
"Sep" = #Missing;
"Oct" = #Missing;
"Nov" = #Missing;
"Dec" = #Missing;
"Jan" = #Missing;
"Feb" = #Missing;
"Mar" = #Missing;
"Apr" = #Missing;
"May" = #Missing;
"Jun" = #Missing;

ELSEIF(@JEQUALSIGNORECASE(@NAME(&DataLoadMth),@NAME("Sep")))
"Oct" = #Missing;
"Nov" = #Missing;
"Dec" = #Missing;
"Jan" = #Missing;
"Feb" = #Missing;
"Mar" = #Missing;
"Apr" = #Missing;
"May" = #Missing;
"Jun" = #Missing;

ELSEIF(@JEQUALSIGNORECASE(@NAME(&DataLoadMth),@NAME("Oct")))
"Nov" = #Missing;
"Dec" = #Missing;
"Jan" = #Missing;
"Feb" = #Missing;
"Mar" = #Missing;
"Apr" = #Missing;
"May" = #Missing;
"Jun" = #Missing;

ELSEIF(@JEQUALSIGNORECASE(@NAME(&DataLoadMth),@NAME("Nov")))
"Dec" = #Missing;
"Jan" = #Missing;
"Feb" = #Missing;
"Mar" = #Missing;
"Apr" = #Missing;
"May" = #Missing;
"Jun" = #Missing;

ELSEIF(@JEQUALSIGNORECASE(@NAME(&DataLoadMth),@NAME("Dec")))
"Jan" = #Missing;
"Feb" = #Missing;
"Mar" = #Missing;
"Apr" = #Missing;
"May" = #Missing;
"Jun" = #Missing;

ELSEIF(@JEQUALSIGNORECASE(@NAME(&DataLoadMth),@NAME("Jan")))
"Feb" = #Missing;
"Mar" = #Missing;
"Apr" = #Missing;
"May" = #Missing;
"Jun" = #Missing;

ELSEIF(@JEQUALSIGNORECASE(@NAME(&DataLoadMth),@NAME("Feb")))
"Mar" = #Missing;
"Apr" = #Missing;
"May" = #Missing;
"Jun" = #Missing;

ELSEIF(@JEQUALSIGNORECASE(@NAME(&DataLoadMth),@NAME("Mar")))
"Apr" = #Missing;
"May" = #Missing;
"Jun" = #Missing;

ELSEIF(@JEQUALSIGNORECASE(@NAME(&DataLoadMth),@NAME("Apr")))
"May" = #Missing;
"Jun" = #Missing;

ELSEIF(@JEQUALSIGNORECASE(@NAME(&DataLoadMth),@NAME("May")))
"Jun" = #Missing;
ENDIF
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


/* ***************************************************************************************** */
/* ****************************** For Aggregation ************************************** */
/* ***************************************************************************************** */

SET FRMLBOTTOMUP ON;

/* Aggregate Brand for display */
FIX(@RELATIVE("YearTotal",0))
FIX("HV9L",@RELATIVE("P&L",0))
FIX(@RELATIVE("Total_Channel",0))
FIX(@RELATIVE("Total_Entity",0))
FIX(@RELATIVE("Total_Region",0))
FIX("No_Department")
FIX("Int","Int_YTD","IntAdj","IntAdj_YTD","ExtAdj","ExtAdj_YTD")
FIX("Local","CNY","EUR")
FIX("HSP_InputValue")
FIX(&CurYear)
FIX("A @ LY A", "A @ CY B", "A @ NY B")
FIX("Master")
       @IDESCENDANTS("SKU_Group");
       @IDESCENDANTS("RP6_Total");
       @ICHILDREN("BO_Total");
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

/* Aggregate Region for display */
FIX(@RELATIVE("YearTotal",0))
FIX("HV9L",@RELATIVE("P&L",0))
FIX(@RELATIVE("Total_Channel",0))
FIX(@RELATIVE("Total_Entity", 0))
FIX("No_Department")
FIX("Int","Int_YTD","IntAdj","IntAdj_YTD","ExtAdj","ExtAdj_YTD")
FIX(@IDESCENDANTS("RP6_Total"), @IDESCENDANTS("SKU_Group"), @ICHILDREN("BO_Total"))
FIX("Local","CNY","EUR")
FIX("HSP_InputValue")
FIX(&CurYear)
FIX("A @ LY A", "A @ CY B", "A @ NY B")
FIX("Master")
    @IDESCENDANTS("Total_Region");
	@IDESCENDANTS("Total_Region_IC");
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

/* Aggregate Channel for display */
FIX(@RELATIVE("YearTotal",0))
FIX("HV9L",@RELATIVE("P&L",0))
FIX(@RELATIVE("Total_Entity", 0))
FIX(@IDESCENDANTS("Total_Region"), @IDESCENDANTS("Total_Region_IC"))
FIX("No_Department")
FIX("Int","Int_YTD","IntAdj","IntAdj_YTD","ExtAdj","ExtAdj_YTD")
FIX(@IDESCENDANTS("RP6_Total"), @IDESCENDANTS("SKU_Group"), @ICHILDREN("BO_Total"))
FIX("Local","CNY","EUR")
FIX("HSP_InputValue")
FIX(&CurYear)
FIX("A @ LY A", "A @ CY B", "A @ NY B")
FIX("Master")
       @IDESCENDANTS("Total_Channel");
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

/* Calculate PRHK all Regions exclude Duty Free */
FIX(@RELATIVE("YearTotal",0))
FIX("HV9L",@RELATIVE("P&L",0))
FIX(@IDESCENDANTS("Total_Channel"))
FIX(@IDESCENDANTS("Total_Region"), @IDESCENDANTS("Total_Region_IC"))
FIX("No_Department")
FIX("Int", "IntAdj", "ExtAdj", "Int_YTD", "IntAdj_YTD", "ExtAdj_YTD")
FIX(@IDESCENDANTS("RP6_Total"), @IDESCENDANTS("SKU_Group"), @ICHILDREN("BO_Total"))
FIX("Local","CNY","EUR")
FIX("HSP_InputValue")
FIX(&CurYear)
FIX("A @ LY A", "A @ CY B", "A @ NY B")
FIX("Master")
		DATACOPY "324" TO "324.";
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

/* Calculate PRHK all Regions exclude Duty Free */
FIX(@RELATIVE("YearTotal",0))
FIX("HV9L",@RELATIVE("P&L",0))
FIX(@IDESCENDANTS("Total_Channel"))
FIX("Total_Region", "Total_Region_IC")
FIX("No_Department")
FIX("Int", "IntAdj", "ExtAdj", "Int_YTD", "IntAdj_YTD", "ExtAdj_YTD")
FIX(@IDESCENDANTS("RP6_Total"), @IDESCENDANTS("SKU_Group"), @ICHILDREN("BO_Total"))
FIX("Local","CNY","EUR")
FIX("HSP_InputValue")
FIX(&CurYear)
FIX("A @ LY A", "A @ CY B", "A @ NY B")
FIX("Master")
		"324" = "324." - "324." -> "02DF";
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


/* Aggregate Entity for display */
FIX(@RELATIVE("YearTotal",0))
FIX("HV9L",@RELATIVE("P&L",0))
FIX(@IDESCENDANTS("Total_Channel"))
FIX(@IDESCENDANTS("Total_Region"), @IDESCENDANTS("Total_Region_IC"))
FIX("No_Department")
FIX("Int", "IntAdj", "ExtAdj", "Int_YTD", "IntAdj_YTD", "ExtAdj_YTD")
FIX(@IDESCENDANTS("RP6_Total"), @IDESCENDANTS("SKU_Group"), @ICHILDREN("BO_Total"))
FIX("CNY","EUR")
FIX("HSP_InputValue")
FIX(&CurYear)
FIX("A @ LY A", "A @ CY B", "A @ NY B")
FIX("Master")
       @IDESCENDANTS("Total_Entity");
	   "Total_Entity_FY12_Backward";
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


/* Copy CM of PRHK(IC) and ADSH(IC) to COG NST Interco in Total Company Level */
FIX(@RELATIVE("YearTotal",0))
FIX("Total_Channel")
FIX("Total_Entity", "Total_Entity_FY12_Backward")
FIX("Total_Region", "Total_Region_IC")
FIX("No_Department")
FIX("Int","Int_YTD","IntAdj","IntAdj_YTD","ExtAdj","ExtAdj_YTD")
FIX("RP6_Total")
FIX("CNY","EUR")
FIX("HSP_InputValue")
FIX(&CurYear)
FIX("A @ LY A", "A @ CY B", "A @ NY B")
FIX("Master")
       "4011.00NSTI" = "Cont. Margin ST Excl. Fx" -> "324" -> "IC" + "Cont. Margin ST Excl. Fx" -> "391" -> "IC";
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

