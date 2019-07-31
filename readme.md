# mulagofoundation.org

This is the codebase for mulagofoundation.org. 

This repo is private and contains sensitive information. Please share responsibly. 


## Developer notes
As an FYI to Mulago staff and as a basic outline for other developers working on this site, here are some details of how the site functions. 

### Deployment
This site is managed through Laravel Forge. Any commit to the `default` branch will be deployed to the staging server found at http://165.227.1.52

### Gitflow
This repo is set up to incorporate the Gitflow methodology. 

### Login
Using your Craft username/pass you can access the control panel at https://mulagofoundation.org/m-admin or http://165.227.1.52/m-admin respectively. Any changes done on the staging server should be considered temporary. 

### Content flow
The rule of thumb is: code up, content down

When the production is live, we will consider that content and database as the gold standard. Under no circumstances should a database from dev or staging go _up_ to production. 

When working on a change, initiate a feature, release, or hotfix branch, pull the production database down, sync assets, and go to work. 

### Project Config 
This site uses Craft's Project Config so all _structural_ changes to the database pushed to the production server using a .yaml file stored within the files here. 

Any changes to structures, fields, plugins additions/configurations, and licensing will need to be handled on a local dev enviornment and then pushed to production, whereopon they will need to be also synced with the production database. 

This database sync will take the site down until initiated and for a matter of seconds during the syncing process. 


