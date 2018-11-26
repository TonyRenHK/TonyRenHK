import csv
FileNumber = 1
Index= 1

with open('input.csv', 'rb') as f:
    fi = open('D:\Output\output'+str(FileNumber)+'.csv', 'wb')
    reader = csv.reader(f)
    for row in reader:
        Index=Index+1
        fi.write(', '.join(row)+"\n")
        if(Index>100 or fi.tell()>11400):
            Index=0
            print fi.tell()
            print 'New file'
            FileNumber=FileNumber+1
            fi = open('D:\Output\output'+str(FileNumber)+'.csv', 'wb')
        #print row

