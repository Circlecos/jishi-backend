#-*- coding=utf-8 -*-

from flask import Flask, request, Response
import json
app = Flask(__name__)

@app.route('/test')
def hello_world():
    return '(｡･∀･)ﾉﾞ嗨'


@app.route('/',methods=['POST'])
def recommendDish():
    data = request.get_data()
    json_re = json.loads(data)
    
    return Response(json.dumps(json_re,ensure_ascii=False)
                    ,content_type='application/json')
