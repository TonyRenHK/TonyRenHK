from datetime import datetime
import calendar

##output 18JAN16



def printme( str ):
       y = datetime.strptime(str, '%Y-%m-%d')
       Datestr=y.strftime("%d/%m/%Y")
       print(Datestr[8:10])
       
       return Datestr[0:2]+calendar.month_abbr[int(Datestr[3:5])].upper()+Datestr[8:10]

print (printme('2012-09-20'))

 #for month_idx in range(1, 12):
        ##print (calendar.month_abbr[month_idx].upper())



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

print(Numebrformat("24"))






Printlst.append("GLOBCRMMG02 DUM010 "+firstStringList[1][:SecondPos-5]+"0001000"+str(int(len(Printlst))+1)+str(int(secondStringList[0][-5:])) +"     "+format(str(int(secondStringList[1])),",d")+ "   "+tempstr[0].strip( '0' )+"."+tempstr[1]+  "\n");
 





































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
        return Numebrformat(str(int(splistr[0])))
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
    
Four_Line="BDUM010HKD1  402-0000020000000+0000051.00000-0001020000000.00-0000000100000+0000051.00000-0000005100000.00-0000020000000+0000051.00000-0001020000000.00-0000040100000+0002045100000.00"

FourStringList=SplitLine(Four_Line)


print(FourStringList)

print("#################################################################################################################")

print(FourStringList[1]+'    '+checkStartStr(FourStringList[2])+'    '+checkStartStr(FourStringList[3])+'    '+checkStartStr(FourStringList[5])+'    '+checkStartStr(FourStringList[6])+'    '+checkStartStr(FourStringList[8])+'    '+checkStartStr(FourStringList[9])+'    '+checkStartStr(FourStringList[11]))



print(FourStringList[0][-4:len(FourStringList[0])-1]+'          '+checkStartStr(FourStringList[4])+'          '+checkStartStr(FourStringList[7])+'          '+checkStartStr(FourStringList[10])+'          '+checkStartStr(FourStringList[12]))

print("---------------------------------------------------------------------------------------------------------------")

Five_Line="BDUM010HKD1 2811-0000002580000+0000041.50000-0000107070000.00-0000000200000+0000041.50000-0000008300000.00-0000007900000+0000041.50000-0000327850000.00-0000010680000+0000443220000.00"
FiveStringList=SplitLine(Five_Line)

print(FiveStringList[1]+'    '+checkStartStr(FiveStringList[2])+'    '+checkStartStr(FiveStringList[3])+'    '+checkStartStr(FiveStringList[5])+'    '+checkStartStr(FiveStringList[6])+'    '+checkStartStr(FiveStringList[8])+'    '+checkStartStr(FiveStringList[9])+'    '+checkStartStr(FiveStringList[11]))


print(FiveStringList[0][-4:len(FiveStringList[0])-1]+'          '+checkStartStr(FiveStringList[4])+'          '+checkStartStr(FiveStringList[7])+'          '+checkStartStr(FiveStringList[10])+'          '+checkStartStr(FiveStringList[12]))

print("@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@2")

Six_Line="BDUM010HKD2     +00000000000000.00+00002488320000.00"
SixStringList=Six_Line.split('+')
print(checkStartStr(SixStringList[1]))

print(checkStartStr(SixStringList[2]))

'''print(secondStringList[6])
print(ChangeNumFormat(ThirdStringList[2]))

second_Line="BDUM010CNY182811+0000002580000+0000024.00000+0000061920000.00+0000000200000+0000024.00000+0000004800000.00+0000007900000+0000024.00000+0000189600000.00+0000010680000+0000256320000.00"
secondStringList=second_Line.split('+')


print(secondStringList[0][7:10])

print(ChangeNumFormat(secondStringList[9]))

print(ChangeNumFormat(secondStringList[11]))
tempstr2= secondStringList[6].split('.')
print(tempstr2[0].strip( '0' )+"."+tempstr2[1])
#print (int(secondStringList[8]))
'''
