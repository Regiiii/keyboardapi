### Get List of Keyboards
`GET` request to `/keyboard` route

Response will be an array of keyboard objects

### Create Keyboard
`POST` request to `/keyboard` route

Request body: 
{
  "brand": <string>,
  "name": <string>,
  "switches": <string>,
  "rgb": <boolean>
  "wireless": <boolean>
}

### Update Keyboard
`PUT` request to `/keyboard/{id}` route

Request body: 
{
  "brand": <string>,
  "name": <string>,
  "switches": <string>,
  "rgb": <boolean>
  "wireless": <boolean>
}

Response will be an updated keyboard object

### Delete Keyboard
`Delete` request to `/student/{id}` route
