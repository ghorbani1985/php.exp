import json,pprint;

configStr = '{ "name": "My Server", "host": "localhost", "protocol": "sftp", "port": 22, "username": "username", "remotePath": "/", "uploadOnSave": true }';
# Convert String to Object
configDict = json.loads(configStr);
print(configDict['name']);
configDict['name'] = "7learn Server";
print(configDict['name']);
# Convert PyDict to JsonString
configStrAgain = json.dumps(configDict);
print(configStrAgain);
pprint.pprint(configStrAgain);


print(config);

# my HomeWork: how can check validate json in python

import json

def isValidateJSON(jsonData):
    try:
        json.loads(jsonData)
    except ValueError as err:
        return False
    return True

InvalidJsonData = """{"name": "Mohsen", "salary": 5000000, "email": "mohseen.ghorbani1985@gmail.com",}"""
isValid = isValidateJSON(InvalidJsonData)

print("Given JSON string is Valid", isValid) #false

validJsonData = """{"name": "Mohsen", "salary": 5000000, "email": "mohseen.ghorbani1985@gmail.com"}"""
isValid = isValidateJSON(validJsonData)

print("Given JSON string is Valid", isValid) #true
