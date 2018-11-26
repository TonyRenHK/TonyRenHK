srcfile=open('input.csv','r')
line=srcfile.readline()
i=0
while line:
    print line
    i+=1
    line=srcfile.readline()
 
print 'Total Number of Lines', i
srcfile.close()
