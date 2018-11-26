def printme( str ):
       y = datetime.strptime(str, '%Y-%m-%d')
       Datestr=y.strftime("%d/%m/%Y")
      
       return Datestr[0:2]+calendar.month_abbr[int(Datestr[3:5])].upper()+Datestr[8:10]
def Numebrformat( str ):
    outputString=''
    ##print(len(str))
    pos=len(str)
    while pos >0 :
        if(pos>3):
            #print(str[pos-3:pos])
            outputString=str[pos-3:pos]+','+outputString
        else:
            #print(str[:pos])
            outputString=str[:pos]+','+outputString
        pos=pos-3
       
    return outputString[:len(outputString)-1]
def ChangeNumFormat( Inputstr ):
    splistr=Inputstr.split('.')
    if(len(splistr)==1):
        return Numebrformat(str(int(splistr[0])))#+'.'+splistr[1]
    else:
        return Numebrformat(str(int(splistr[0])))+'.'+splistr[1]
def SplitLine(InputStr):
    OutPutList=[]
    pos=0
    CutString=''
    while pos<len(InputStr):
        if(InputStr[pos]==' ' and CutString!=''):
           OutPutList.append(CutString)
           CutString=''
        elif (InputStr[pos]=='-' or InputStr[pos]=='+'):
           OutPutList.append(CutString)
           CutString=InputStr[pos]
        elif(InputStr[pos]!=''):
            CutString=CutString+InputStr[pos]
        pos=pos+1
    if(CutString!=''):
        OutPutList.append(CutString)
    return OutPutList
def checkStartStr(InputStr):
    #check current string whether start with '-', if yes, display number+'-'
    Message=''
    if(InputStr.startswith('-')):
        Message=ChangeNumFormat(InputStr[1:len(InputStr)])+'-'
    else:
        Message=ChangeNumFormat(InputStr[1:len(InputStr)])  
    return Message
    
import string
import java.sql as sql
import java.lang as lang
import re
import time
##
from datetime import datetime
import calendar
Printlst=[]
srcfile=open('/home/oracle/Desktop/report/input.txt','r')
first_line=srcfile.readline()
second_Line=srcfile.readline()
third_Line=srcfile.readline()
Four_Line=srcfile.readline()
Five_Line=srcfile.readline()
Six_Line=srcfile.readline()
srcfile.close()
# var init
dummyflag=False
offset = 0
FisrtPos=0
SecondPos=0
currentLength=0
PlusPos=0 # First Plus apear time
##Fisrt Line
firstStringList= first_line.split()
while offset <len(firstStringList[1]):
  if(firstStringList[1][offset]=='+' and PlusPos==0):
    PlusPos=offset
  if(firstStringList[1][offset]==':'):
    SecondPos=offset
  offset=offset+1
currentLength= int(len(Printlst))+1
## 1st Line 
Printlst.append("GLOBCRMMG02 DUM010 "+firstStringList[1][:SecondPos-5]+"0001000"+str(int(len(Printlst))+1)+"   "+firstStringList[0][1:7]+" HKSCC - CCASS                                         RUN DATE : "+printme(firstStringList[1][10:20])+" \n");
## 2nd Line 
Printlst.append("GLOBCRMMG02 DUM010 "+firstStringList[1][:SecondPos-5]+"0001000"+str(int(len(Printlst))+1)+firstStringList[0][1:7]+"PART FULL NAME 1                                MARGIN PAYABLE REPORT                                     RUN TIME : "+datetime.now().strftime('%H:%M:%S')+" \n");
## 3 Line 
Printlst.append("GLOBCRMMG02 DUM010 "+firstStringList[1][:SecondPos-5]+"0001000"+str(int(len(Printlst))+1)+firstStringList[0][1:7]+"PART FULL NAME 1                                                                                              PAGE : "+str(currentLength)+" \n");
## 4 Line
Printlst.append("GLOBCRMMG02 DUM010 "+firstStringList[1][:SecondPos-5]+"0001000"+str(int(len(Printlst))+1)+" \n");
## 5 line
Printlst.append("GLOBCRMMG02 DUM010 "+firstStringList[1][:SecondPos-5]+"0001000"+str(int(len(Printlst))+1)+"DATE : 19OCT15               SNAPSHOT TIME : "+firstStringList[1][SecondPos-5:SecondPos+3] +" \n");
## 6 Line
Printlst.append("GLOBCRMMG02 DUM010 "+firstStringList[1][:SecondPos-5]+"0001000"+str(int(len(Printlst))+1)+" \n");
 
##7 Line SECTION A   FOR NON-MULTI-COUNTER SECURITIES & MULTI-COUNTER SECURITIES WITHOUT NETTING
Printlst.append("GLOBCRMMG02 DUM010 "+firstStringList[1][:SecondPos-5]+"0001000"+str(int(len(Printlst))+1)+"  Line SECTION A   FOR NON-MULTI-COUNTER SECURITIES & MULTI-COUNTER SECURITIES WITHOUT NETTING \n");
 
#8 Line 
Printlst.append("GLOBCRMMG02 DUM010 "+firstStringList[1][:SecondPos-5]+"0001000"+str(int(len(Printlst))+1)+" \n");
 
#9
Printlst.append("GLOBCRMMG02 DUM010 "+firstStringList[1][:SecondPos-5]+"0001000"+str(int(len(Printlst))+1)+"      STM DATE : "+printme(firstStringList[1][PlusPos-20:PlusPos-10])+"                STM DATE : "+printme(firstStringList[1][PlusPos-10:PlusPos])+"                DUE/OVERDUE                       TOTAL (CROSS-DAY NET) \n");
 
#10
Printlst.append("GLOBCRMMG02 DUM010 "+firstStringList[1][:SecondPos-5]+"0001000"+str(int(len(Printlst))+1)+"STOCK/ QTY / MKT PRICE (BASE CCY) /      QTY / MKT PRICE (BASE CCY) /      QTY / MKT PRICE (BASE CCY) /      QTY /\n");
 
#11
Printlst.append("GLOBCRMMG02 DUM010 "+firstStringList[1][:SecondPos-5]+"0001000"+str(int(len(Printlst))+1)+"CCY    MKT VALUE (BASE CCY)              MKT VALUE (BASE CCY)              MKT VALUE (BASE CCY)              MKT VALUE (BASE CCY)\n");
 
#12
Printlst.append("GLOBCRMMG02 DUM010 "+firstStringList[1][:SecondPos-5]+"0001000"+str(int(len(Printlst))+1)+"------ --------------------------------- --------------------------------- --------------------------------- ----------------------\n");
 
secondStringList=second_Line.split('+')
#13  
#Printlst.append("GLOBCRMMG02 DUM010 "+firstStringList[1][:SecondPos-5]+"0001000"+str(int(len(Printlst))+1)+str(int(secondStringList[0][-5:])) +"     "+Numebrformat(str(int(secondStringList[1])))+ "   "+Numebrformat(tempstr[0].strip( '0' ))+"."+tempstr[1]+ "   "+Numebrformat(str(int(secondStringList[4])))+ "   "+Numebrformat(tempstr2[0].strip( '0' ))+"."+tempstr2[1]+"   "+Numebrformat(tempstr3[0].strip( '0' ))+"."+tempstr3[1]++"   "+Numebrformat(str(int(secondStringList[7])))+ "\n");
Printlst.append("GLOBCRMMG02 DUM010 "+firstStringList[1][:SecondPos-5]+"0001000"+str(int(len(Printlst))+1)+str(int(secondStringList[0][-5:])) +"     "+Numebrformat(str(int(secondStringList[1])))+ "   "+ChangeNumFormat(secondStringList[2])+ "   "+Numebrformat(str(int(secondStringList[4])))+ "   "+ChangeNumFormat(secondStringList[5])+"   "+Numebrformat(str(int(secondStringList[7])))+"   "+ChangeNumFormat(secondStringList[8]) +"\n");
  
#14 line
Printlst.append("GLOBCRMMG02 DUM010 "+firstStringList[1][:SecondPos-5]+"0001000"+str(int(len(Printlst))+1)+" ("+secondStringList[0][7:10]+")    "+ChangeNumFormat(secondStringList[3])+"   "+ChangeNumFormat(secondStringList[6])+"   "+ChangeNumFormat(secondStringList[9])+"  "+ChangeNumFormat(secondStringList[11])+ "\n");
 
#15 line
Printlst.append("GLOBCRMMG02 DUM010 "+firstStringList[1][:SecondPos-5]+"0001000"+str(int(len(Printlst))+1)+" \n");
 
#16 line
ThirdStringList=third_Line.split('+')
FiveStringList=SplitLine(Five_Line)
SixStringList=Six_Line.split('+')
Printlst.append("GLOBCRMMG02 DUM010 "+firstStringList[1][:SecondPos-5]+"0001000"+str(int(len(Printlst))+1)+"           TOTAL CROSS-DAY NET LONG  CNS POSITION :"+ChangeNumFormat(ThirdStringList[1])+"\n");
#17
Printlst.append("GLOBCRMMG02 DUM010 "+firstStringList[1][:SecondPos-5]+"0001000"+str(int(len(Printlst))+1)+"           TOTAL CROSS-DAY NET SHORT CNS POSITION : "+ChangeNumFormat(ThirdStringList[2])+"\n");
#18
Printlst.append("GLOBCRMMG02 DUM010 "+firstStringList[1][:SecondPos-5]+"0001000"+str(int(len(Printlst))+1)+" \n");
 
#19
FourStringList=SplitLine(Four_Line)
Printlst.append("GLOBCRMMG02 DUM010 "+firstStringList[1][:SecondPos-5]+"0001000"+str(int(len(Printlst))+1)+"         "+FourStringList[1]+'    '+checkStartStr(FourStringList[2])+'    '+checkStartStr(FourStringList[3])+'    '+checkStartStr(FourStringList[5])+'    '+checkStartStr(FourStringList[6])+'    '+checkStartStr(FourStringList[8])+'    '+checkStartStr(FourStringList[9])+'    '+checkStartStr(FourStringList[11])+" \n");
#20
Printlst.append("GLOBCRMMG02 DUM010 "+firstStringList[1][:SecondPos-5]+"0001000"+str(int(len(Printlst))+1)+"         "+FourStringList[0][-4:len(FourStringList[0])-1]+'          '+checkStartStr(FourStringList[4])+'          '+checkStartStr(FourStringList[7])+'          '+checkStartStr(FourStringList[10])+'          '+checkStartStr(FourStringList[12])+" \n");
#21
Printlst.append("GLOBCRMMG02 DUM010 "+firstStringList[1][:SecondPos-5]+"0001000"+str(int(len(Printlst))+1)+" ("+FiveStringList[1]+")    "+checkStartStr(FiveStringList[2])+'    '+checkStartStr(FiveStringList[3])+'    '+checkStartStr(FiveStringList[5])+'    '+checkStartStr(FiveStringList[6])+'    '+checkStartStr(FiveStringList[8])+'    '+checkStartStr(FiveStringList[9])+'    '+checkStartStr(FiveStringList[11])+" \n");
#22
Printlst.append("GLOBCRMMG02 DUM010 "+firstStringList[1][:SecondPos-5]+"0001000"+str(int(len(Printlst))+1)+" ("+FiveStringList[0][-4:len(FiveStringList[0])-1]+")          "+checkStartStr(FiveStringList[4])+'          '+checkStartStr(FiveStringList[7])+'          '+checkStartStr(FiveStringList[10])+'          '+checkStartStr(FiveStringList[12])+" \n");
#23

Printlst.append("GLOBCRMMG02 DUM010 "+firstStringList[1][:SecondPos-5]+"0001000"+str(int(len(Printlst))+1)+"\n");
 
#24
Printlst.append("GLOBCRMMG02 DUM010 "+firstStringList[1][:SecondPos-5]+"0001000"+str(int(len(Printlst))+1)+"                          TOTAL CROSS-DAY NET LONG  CNS POSITION :  "+FiveStringList[0][-4:len(FiveStringList[0])-1]+' '+checkStartStr(SixStringList[1])+ "  \n");
#25
Printlst.append("GLOBCRMMG02 DUM010 "+firstStringList[1][:SecondPos-5]+"0001000"+str(int(len(Printlst))+1)+"                          TOTAL CROSS-DAY NET SHORT CNS POSITION :  "+FiveStringList[0][-4:len(FiveStringList[0])-1]+'  '+checkStartStr(SixStringList[2])+" \n");
#26
Printlst.append("GLOBCRMMG02 DUM010 "+firstStringList[1][:SecondPos-5]+"0001000"+str(int(len(Printlst))+1)+"\n");
##Start writing  
sourceConnection = odiRef.getJDBCConnection("WORKREP")
output_write=open('/home/oracle/Desktop/report/ouput.txt','w')
# Print TXT
for item in Printlst:
  print >> output_write, item
  

#print >> output_write, 'Testing Output'
## For  Testing Only  
#print >> output_write, '#variable1'   #Numebrformat(str(int(secondStringList[1]))) #format(int(secondStringList[1]),",d")
sourceConnection.close()
output_write.close() 
   
