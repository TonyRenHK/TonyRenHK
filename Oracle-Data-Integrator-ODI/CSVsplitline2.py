import csv
import os
#constant variable, DO NO CHANGE!
HEADERROWCOUNT='HEADERROWCOUNT'


##FUNCTION: Over Write Header in the File, and will replace 'HEADERROWCOUNT' to total line number (http://odiexperts.com/jython-beginners-guide-for-odi/)
def OverWriteFile( IPName,TotalLines ):
   source_file=open(IPName,'r')
   read_lines=source_file.readlines()
   read_lines[0]=read_lines[0].replace(HEADERROWCOUNT, TotalLines)
   output_write=open(IPName,'w')
   output_write.writelines(read_lines)
   source_file.close()
   output_write.close()
   return
#########Function End



##Change variable below if needed
## variable 'InputFilePath' is the path of your input file
InputFilePath='D:\\Input\\input.csv'
## variable 'OFilePath' is the path of your output folder
OFilePath='D:\\Output\\'
## variable 'FileName' is output file name in the output folder
FileName='FileName'
## variable 'CutOffLine' is the Number of line need to split in input file
CutOffLine=500
## variable 'CutSize' is the Number of size need to split in input file
CutSize=10000 # (pointer) 1000 pointer =1k

## Header : Please do not change 'HEADERROWCOUNT' variable
HeaderNames = ['Header A', 'Header B','Header c',' Header D',' Header E',HEADERROWCOUNT] # Header A, Header B, Header C, Header D, Header ROW COUNT

# Change to tab delimited if needed 
Tabdelimiter=','



##################Function Start################

FileNumber = 1
Index= 1
#Read input file
spamReader = csv.reader(open(InputFilePath)) # , delimiter=' ', quotechar='|'
fi = open(OFilePath+FileName+str(FileNumber)+'.csv', 'wb')
writer = csv.writer(fi)
writer.writerow(HeaderNames)

for row in spamReader:
   Index=Index+1
   ##write into the new file
   writer = csv.writer(fi,delimiter = Tabdelimiter)
   ##Add Sequence Number in last column
   row.append(str(Index))
   writer.writerow(row)
   if(Index>CutOffLine or fi.tell()>CutSize):
      print 'Create New file: '+FileName+str(FileNumber)+'.csv' + ' with Size: '+str(fi.tell())
      fi.close()
      ## over write header
      OverWriteFile(OFilePath+FileName+str(FileNumber)+'.csv',str(Index))

      ##create new file
      Index=0
      FileNumber=FileNumber+1
      fi = open(OFilePath+FileName+str(FileNumber)+'.csv', 'wb')
      writer = csv.writer(fi,delimiter = Tabdelimiter)
      writer.writerow(HeaderNames)

## over write header in last file
OverWriteFile(OFilePath+FileName+str(FileNumber)+'.csv',str(Index))
    
fi.close()
print 'END'



