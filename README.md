
# User Service 

Notification Microservice use to received data from user Service


## Installation

Install my-project with npm

```bash
git clone https://github.com/atif08/notification-service.git
cd notification-service
composer install
symfony server:start
docker-compose up

```
    
## Usage/Examples

```javascript
Send a POST request to the /notifications endpoint with the following JSON payload:


{
  "email": "example@example.com",
  "firstName": "John",
  "lastName": "Doe"
}
curl -X POST http://localhost:8000/users -H "Content-Type: application/json" -d '{"email": "example@example.com", "firstName": "John", "lastName": "Doe"}'

```

