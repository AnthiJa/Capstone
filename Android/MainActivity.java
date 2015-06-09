package com.example.webview;

import android.app.Activity;
import android.content.Intent;
import android.net.Uri;
import android.os.Bundle;
import android.view.Menu;
import android.view.MenuItem;
import android.view.Window;
import android.view.WindowManager;
import android.webkit.WebSettings;
import android.webkit.WebView;


public class MainActivity extends Activity {

	

	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.activity_main);
		
		
		String url = " http://anthijamobile-jacobnaiyeju.rhcloud.com/";
		WebView view=(WebView) this.findViewById(R.id.webView1); 
		WebSettings webSettings = view.getSettings();
		webSettings.setJavaScriptEnabled(true);
		
		view.loadUrl(url);
		
		
		//requestWindowFeature(Window.FEATURE_NO_TITLE); 
		//this.getWindow().setFlags(WindowManager.LayoutParams.FLAG_FULLSCREEN, WindowManager.LayoutParams.FLAG_FULLSCREEN);
		//view.getSettings().setJavaScriptEnabled(true)
		
		// Uri uri = Uri.parse("http//google.com");
		 
		 
		
		//Uri uri = Uri.parse("http:www.google.com");
		//Intent intent = new Intent(Intent.ACTION_VIEW, uri);
		//startActivity(intent);
		
		
	}

	@Override
	public boolean onCreateOptionsMenu(Menu menu) {
		// Inflate the menu; this adds items to the action bar if it is present.
		getMenuInflater().inflate(R.menu.main, menu);
		return true;
	}

	@Override
	public boolean onOptionsItemSelected(MenuItem item) {
		// Handle action bar item clicks here. The action bar will
		// automatically handle clicks on the Home/Up button, so long
		// as you specify a parent activity in AndroidManifest.xml.
		int id = item.getItemId();
		if (id == R.id.action_settings) {
			return true;
		}
		return super.onOptionsItemSelected(item);
	}
}
