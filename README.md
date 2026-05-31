# Yii2 collaborator

## start
git clone https://github.com/Lavrinovich88/collaborator.git collaborator
cd collaborator
make start

## execute
curl -X POST http://localhost:8001/sum \
  -H "Content-Type: application/json" \
  -H "Accept: application/json" \
  -d '{"numbers": [1, 2, 3, 4, 5, 6]}'

### response
{"success":true,"result":12}

## test
make test

## structure
controllers/MathController.php
dto/MathRequestDto.php
services/MathService.php
services/interfaces/MathServiceInterface.php
tests/unit/services/MathServiceTest.php