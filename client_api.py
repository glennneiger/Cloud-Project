import ceilometerclient.client
import MySQLdb


cclient = ceilometerclient.client.get_client('2', os_username='admin', os_password='123456', os_tenant_name='admin', os_auth_url='http://192.168.1.4:5000/v2.0')

db = MySQLdb.connect(host = "localhost",
		     user = "root",
                     passwd = "123456",
	             db = "RESOURCES")
db.commit()

cur = db.cursor()


### Get metrics for a resource ###
meters=[];
query = [dict(field= 'resource_id', op='eq', value= '0877d74c-fc08-46bd-9511-8d61e5aa01ab')]
#retm=cclient.meters.list(q=query)
retm=cclient.meters.list()
print len(retm)
for i in retm:
#	print i
	#print "----- METERICS -----"
	#print "name	: ",i.name
	#meters.append(i.name)
	#print "type	: ",i.type
	#print "unit	: ",i.unit
	#print "resource_id	: ",i.resource_id
	#print "user_id		: ",i.user_id
	#print "project_id	: ",i.project_id
	cur.execute("""INSERT INTO Metrics (Name, Type, Unit) VALUES (%s,%s,%s)""",(i.name, i.type, i.unit))



### Get sample list for a meter from resource ###	 
query = [dict(field= 'resource_id', p='eq', value= '0877d74c-fc08-46bd-9511-8d61e5aa01ab'), dict(field= 'meter', op='eq', value= 'disk.capacity')]
rets=cclient.new_samples.list(q=query, limit=5)
print len(rets)
for i in rets:
#	print i
	print "----- SAMPLES -----"
	print "meter		: ",i.meter
	print "type		: ",i.type
	print "volume		: ",i.volume
	print "unit		: ",i.unit
	print "timestamp	: ",i.timestamp
	print "recorded_at	: ",i.recorded_at
	print "id		: ",i.id
	print "user_id		: ",i.user_id
	print "resource_id	: ",i.resource_id
	print "project_id	: ",i.project_id
	###cur.execute("""INSERT INTO Samples VALUES(%s,%s,%s,%s,%s,%s) """, ())
	

### Get all resources ###
retr=cclient.resources.list()
print len(retr)
for i in retr:	
	#print "----- RESOURCE -----"
	#print "user_id		: ",i.user_id
	#print "resource_id	: ",i.resource_id
	#print "source		: ",i.source
	#print "project_id	: ",i.project_id
	cur.execute("""INSERT INTO resourceInfo (UserId, ResourceId, Source, ProjectId) VALUES (%s,%s,%s,%s)""",(i.user_id, i.resource_id, i.source, i.project_id))

#ret5= cclient.meters.list()
#print ret5
#print len(ret5)

db.commit()
db.close()
cur.close()
