from os import path

DB_URI = path.abspath(path.dirname(__name__))

DEBUG = True

SECRET_KEY = "mysecretkeyhere"

SQLALCHEMY_DATABASE_URI = "sqlite:///" + DB_URI + "/data.db"


HELLO = "Hello from Config"
