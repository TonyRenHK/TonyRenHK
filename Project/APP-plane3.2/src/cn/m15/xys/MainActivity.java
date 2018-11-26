package cn.m15.xys;

import android.app.ActionBar;
import android.app.AlertDialog;
import android.content.DialogInterface;
import android.content.DialogInterface.OnClickListener;
import android.os.Bundle;
import android.support.v4.app.FragmentActivity;
import android.view.Menu;
import android.view.MenuItem;

public class MainActivity extends FragmentActivity {

	private GameView gameView;
	private int score = 0;
	private static MainActivity mainActivity = null;
	private ActionBar actionBar;
	
	public MainActivity(){
		mainActivity = this;
	}
	public void clearScore(){
		score = 0;
	}
	public void showScore(){
		actionBar.setTitle("Current£º " + this.score );
		if(this.score > DataUtil.loadTopScore(this)){
			DataUtil.saveTopScore(this, score);
		}
		actionBar.setSubtitle("Highest £º " + DataUtil.loadTopScore(this));
	}
	
	public void showScore(int score){
		this.score = score;
		actionBar.setTitle("Current£º " + this.score );
		if(this.score > DataUtil.loadTopScore(this)){
			DataUtil.saveTopScore(this, score);
		}
		actionBar.setSubtitle("Highest £º " + DataUtil.loadTopScore(this));
	}
	
	public int getScore(){
		return score;
	}
	
	public void addScore(int addScore){
		score = score + addScore;
		showScore();
	}
	public static MainActivity getMainActivity(){
		return mainActivity;
	}
	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		actionBar = getActionBar();
		actionBar.setSubtitle("Highest£º " + DataUtil.loadTopScore(this) );
		setContentView(R.layout.activity_main);
		gameView = (GameView) findViewById(R.id.gameView);
		SysApplication.getInstance().addActivity(this);
		//save activity
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
		switch (item.getItemId()) {
		case R.id.action_refresh:
			new AlertDialog.Builder(this)
			.setTitle("All start again")
			.setMessage("You have got  " 
			+ MainActivity.getMainActivity().getScore() + " marks!!\n Start again£¿")
			.setNegativeButton("cancel", new DialogInterface.OnClickListener() {
				
				@Override
				public void onClick(DialogInterface dialog, int which) {
					// TODO Auto-generated method stub
					
				}

				
			})
			.setPositiveButton("Again", new DialogInterface.OnClickListener() {
				
				@Override
				public void onClick(DialogInterface dialog, int which) {
					// TODO Auto-generated method stub
					gameView.clearData();
					gameView.startGame();
				}
			})
			.show();
			
			break;
		case R.id.action_name:
			String items[] = {"Number", "Emperor"};
			new AlertDialog.Builder(this)
			.setTitle("Set your name")
			.setItems(items, new OnClickListener() {
				
				@Override
				public void onClick(DialogInterface dialog, int which) {
					// TODO Auto-generated method stub
					switch (which) {
					case 0:
						DataUtil.saveType(MainActivity.this, 0);
						break;
					
					case 1:
						DataUtil.saveType(MainActivity.this, 1);
						break;
					default:
						break;
					}
					gameView.reName();
				}
			}).show();
			break;
		default:
			break;
		}
		return super.onOptionsItemSelected(item);
	}
	
	@Override
	protected void onPause() {
		// TODO Auto-generated method stub
		super.onPause();
		gameView.saveMap();
		
	}
	@Override
	protected void onDestroy() {
		// TODO Auto-generated method stub
		super.onDestroy();
		
	}
}
