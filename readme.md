Run "ifconfig" command on devstack machine and VM2 terminals to see the ip addresses.<br>
Ping Devstack from VM2 and vice versa to make sure they are connected.<br>
If ping fails saying "Destination unreachable", run "ifconfig br-ex down" command on devstack (terminal).<br>
Then again ping to make sure it works fine.<br><br>

To see the current setup of devstack:<br>
    open "http://localstack" in browser.<br>
    Login to Devstack using login Id 'admin' and password '123456'.<br>
    In project it will show the admin project details.<br>
    In identity under users and projects, all users and projects can be seen.<br><br>
    
To run the web application:<br>
    Open "http://localhost/index.php" on VM2.<br>
    User can login to web browser using user name and password (for example 'user1' and password 'user1pass' or 'user2' and password 'user2pass'.<br>
    Once logged in user can access devstack throuth button 'Openstack'. It will take it to devstack link and user can login and make changes to its project.<br>
    After making changes user may want to update the database. To do that click on the button 'User can update database here'. This will update the SQL tables so that the changes get reflected in the database.<br>
    User can also see the performance of all the resources that belong to the user. Click on 'User can view the recources'. Now user can see all the resources. Select the resource from dropdown and click 'post'.<br>
    In the dropdown below user can see all the metrics that are associated with this resource. Select a meter and click 'post'.<br>
    A graphh showing the latest 5 samples collected by ceilometer for that meter can be seen there.<br><br>
    
Files included in the repository are:<br><br>
[filename:              Purpose<br>
                        New / Modified<br>
                        Comments]<br>
                        
openstack_client.py:    This file updates the user details in the database table 'Users'.<br>
                        New<br>
                        This uses openstack comand to get details from devstack. This script is run on VM2 that has database server.<br><br>
                        
openStack_table.py:     This file updated database tables 'resourceInfo', 'Metrics', 'MetricResource' and 'Samples' to reflect all the changes on devstack. <br>
                        Modified from client_api.py<br>
                        This script is executed when the button 'user can update here' is pressed. It has openstack and ceilometer API commands.<br><br>

dev_ceil_conf.sh:       It is used to export environment variables required for openstack and ceilometer command<br>
                        New<br>
                        <br>

To view the database run command "mysql –u root –p"<br>
The database name is RESOURCES.<br>
Using the MySQL queries, you can access the database and the tables in it.<br>
The html files can be directly opened in a web browser(preferably google chrome).<br><br>


The following commands were used to install the required software technologies:<br
1. LAMP Server : sudo apt-get install apache2<br>
2. MySQL : sudo apt-get install mysql-server<br>
3. php : sudo apt-get install php7 libapache2-mod-php7<br>
4. Check php : php -r 'echo "\n\nYour PHP installation is working fine.\n\n\n";'<br>
5. Restart Server : sudo /etc/init.d/apache2 restart<br>
6. Open MySQL in Terminal: sudo mysql -u root -p<br>
7. Install openstack client on VM2 using 'pip install python-openstackclient'<br>
8. Install ceilometerclient API from the github repository 'https://github.com/openstack/python-ceilometerclient'<br>
9. To run the openstack and ceilometer commands we first need to source some environment variables that are mentioned in 'dev_ceil_conf.sh'<br>
